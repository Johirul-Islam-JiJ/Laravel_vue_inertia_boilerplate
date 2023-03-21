<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    /**
     * @param Settings $settings
     * @return \Inertia\Response|\Inertia\ResponseFactory
     */
    public function edit($settings)
    {
        $settings = Settings::findOrFail($settings);

        return inertia('Settings/Form', ['settings' => $settings]);
    }

    /**
     * @param Request $request
     * @param Settings $settings
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $settings)
    {
        $settings = Settings::findOrFail($settings);

        $valid = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'max:255'],
            'phone' => ['required', 'max:255'],
            'mobile' => ['nullable', 'max:255'],
            'whatsapp' => ['nullable', 'max:255'],
            'address' => ['required', 'max:255'],
            'working_hour' => ['nullable', 'max:255'],
            'short_description' => ['nullable', 'max:255'],
            'description' => ['nullable'],
            'copyright' => ['required', 'max:255'],
        ]);

        $request->validate([
            'logo' => ['nullable', 'file', 'image', 'max:2048'],
            'favicon' => ['nullable', 'file', 'mimes:ico', 'max:150'],
        ]);

        if ($request->hasFile('logo')) {
            if (Storage::disk('public')->exists($settings->getRawOriginal('logo')))
                Storage::disk('public')->delete($settings->getRawOriginal('logo'));

            $file = $request->file('logo');
            $path = $file->storeAs('images', $file->getClientOriginalName(), 'public');

            $valid['logo'] = $path;
        }

        if ($request->hasFile('favicon')) {
            if (Storage::disk('public')->exists($settings->getRawOriginal('favicon')))
                Storage::disk('public')->delete($settings->getRawOriginal('favicon'));

            $path = $request->file('favicon')->storeAs('images', 'favicon.ico', 'public');

            $valid['favicon'] = $path;
        }

        if ($settings->update($valid))
            return back()->with('success', 'Updated Successfully');

        return back()->with('error', 'Something Went Wrong');
    }
}
