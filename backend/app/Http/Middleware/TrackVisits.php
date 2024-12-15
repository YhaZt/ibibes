<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\WebpageVisitor;
use App\Models\Visitor;
use Illuminate\Support\Facades\Cookie;
use Jenssegers\Agent\Agent;

class TrackVisits
{
    public function handle(Request $request, Closure $next)
    {
        $agent = new Agent();
        $deviceType = $agent->isDesktop() ? 'PC' : 'Cellphone';
        $deviceModel = $agent->device();
        $deviceId = $deviceModel . '-' . $agent->platform() . '-' . $agent->browser();
        $ipAddress = $request->ip();
        $browserUsed = $agent->browser();
        $internetType = $this->getInternetType($request);
        $location = $this->getLocationFromIP($ipAddress);
        if (!$request->cookie('visitor_id')) {
            $visitor = Visitor::create([
                'device_type' => $deviceType,
                'device_model' => $deviceModel,
                'browser_used' => $browserUsed,
                'internet_type' => $internetType,
                'location' => $location,
                'ip_address' => $ipAddress,
            ]);
            $pageVisitor = WebpageVisitor::first();
            if ($pageVisitor) {
                $pageVisitor->increment('number_of_visit');
            } else {
                WebpageVisitor::create(['number_of_visit' => 1]);
            }
            Cookie::queue('visitor_id', $visitor->id, 60 * 24 * 365);
        }

        return $next($request);
    }
    protected function getInternetType(Request $request)
    {
        $connectionType = $request->header('X-Wi-Fi');
        if ($connectionType && strtolower($connectionType) === 'true') {
            return 'Wi-Fi';
        }
        return 'Mobile Data';
    }
    protected function getLocationFromIP($ipAddress)
    {
        $apiUrl = "http://ipinfo.io/{$ipAddress}/json";
        try {
            $response = file_get_contents($apiUrl);
            $data = json_decode($response, true);
            if (isset($data['city']) && isset($data['region'])) {
                return "{$data['city']}, {$data['region']}";
            }
            return 'Unknown Location';
        } catch (\Exception $e) {
            return 'Unknown Location';
        }
    }
}
