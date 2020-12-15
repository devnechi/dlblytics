<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        // \App\Http\Middleware\TrustHosts::class,
        \App\Http\Middleware\TrustProxies::class,
        \Fruitcake\Cors\HandleCors::class,
        \App\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:60,1',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,


        'admin' =>\App\Http\Middleware\Admin::class,
        'manager' =>\App\Http\Middleware\Manager::class,
        'ri-pillar-manager' =>\App\Http\Middleware\RIlineManager::class,
        'cb-pillar-manager' =>\App\Http\Middleware\CBpillarManager::class,
        'is-pillar-manager' =>\App\Http\Middleware\ISpillarManager::class,
        'ce-pillar-manager' =>\App\Http\Middleware\CEpillarManager::class,
        'ds-pillar-manager' =>\App\Http\Middleware\DSpillarManager::class,

        'user' =>\App\Http\Middleware\User::class,
        'finance-dashboard' => \App\Http\Middleware\FinanceAdmin::class,
        'monitoring-evaluation-dashboard' => \App\Http\Middleware\MonitoringnEvaluation::class,
        'capacity-building-dashboard' => \App\Http\Middleware\CapacityBuilding::class,
        'institutional-strengthening-dashboard' => \App\Http\Middleware\InstitutionStrengthing::class,
        'research-innovation-dashboard' => \App\Http\Middleware\ResearchnInnovation::class,
        'community-engagement-dashboard' => \App\Http\Middleware\CommunityEngagement::class,
        'data-science-dashboard' => \App\Http\Middleware\DataScience::class,
        'communication-channels-dashboard' => \App\Http\Middleware\CommunicationsChannel::class,
        'members-area-dashboard' => \App\Http\Middleware\NormalUser::class,
        'dlab-donors-dashboard' => \App\Http\Middleware\DonorArea::class,





    ];
}
