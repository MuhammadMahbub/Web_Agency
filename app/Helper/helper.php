<?php

// General Settings
function generalsettings()
{
    return \App\Models\GeneralSetting::first();
}

// Title Settings
function titlesettings()
{
    return \App\Models\TitleSetting::first();
}

// Social Urls
function socialurls()
{
    return \App\Models\Socialurl::first();
}

// Color Settings
function colorSettings()
{
    return \App\Models\ColorSetting::first();
}

// ThemeSettings
function themesettings($user_id)
{
    return \App\Models\ThemeSetting::where('user_id', $user_id)->first();
}

function page_urls()
{
    return \App\Models\AddURL::all();
}

