@use(Codecycler\FilamentVersion\Facades\Version)

<div class="text-center text-sm" style="color: #9CA3AF;">
    &copy; {{ now()->format('Y') }} - {{ __('version::version.version') }} {{ Version::current() }}
</div>