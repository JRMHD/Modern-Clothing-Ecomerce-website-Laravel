<section
    style="max-width: 768px; margin: 2rem auto; padding: 2rem; background: white; border-radius: 16px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); background-color: #ffffff;">
    <header style="margin-bottom: 2rem; position: relative;">
        <div style="position: relative; padding-left: 1rem; margin-bottom: 1.5rem;">
            <div
                style="position: absolute; left: 0; top: 0; bottom: 0; width: 4px; background: linear-gradient(to bottom, #ECF5F4, #70B6B0); border-radius: 4px;">
            </div>
            <h2 style="font-size: 1.5rem; font-weight: 600; color: #2D3748; margin: 0;">
                {{ __('Profile Information') }}
            </h2>
            <p style="margin-top: 0.5rem; color: #718096; font-size: 0.95rem;">
                {{ __("Update your account's profile information and email address.") }}
            </p>
        </div>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}"
        style="display: flex; flex-direction: column; gap: 1.5rem;">
        @csrf
        @method('patch')

        <div style="display: flex; flex-direction: column; gap: 0.5rem;">
            <label for="name" style="font-weight: 500; color: #4A5568; font-size: 0.95rem;">
                {{ __('Name') }}
            </label>
            <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required
                autofocus autocomplete="name"
                style="width: 100%; padding: 0.75rem 1rem; border: 1px solid #E2E8F0; border-radius: 8px; font-size: 1rem; transition: all 0.2s; background-color: #F8FAFB;"
                onFocus="this.style.borderColor='#70B6B0'; this.style.boxShadow='0 0 0 3px rgba(236, 245, 244, 0.3)'"
                onBlur="this.style.borderColor='#E2E8F0'; this.style.boxShadow='none'" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div style="display: flex; flex-direction: column; gap: 0.5rem;">
            <label for="email" style="font-weight: 500; color: #4A5568; font-size: 0.95rem;">
                {{ __('Email') }}
            </label>
            <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required
                autocomplete="username"
                style="width: 100%; padding: 0.75rem 1rem; border: 1px solid #E2E8F0; border-radius: 8px; font-size: 1rem; transition: all 0.2s; background-color: #F8FAFB;"
                onFocus="this.style.borderColor='#70B6B0'; this.style.boxShadow='0 0 0 3px rgba(236, 245, 244, 0.3)'"
                onBlur="this.style.borderColor='#E2E8F0'; this.style.boxShadow='none'" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div style="margin-top: 0.5rem; padding: 1rem; background-color: #ECF5F4; border-radius: 8px;">
                    <p style="color: #4A5568; font-size: 0.95rem; margin: 0;">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification"
                            style="color: #70B6B0; text-decoration: underline; font-size: 0.95rem; background: none; border: none; cursor: pointer; padding: 0; margin-left: 0.5rem;"
                            onMouseOver="this.style.color='#4A9690'" onMouseOut="this.style.color='#70B6B0'">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p style="margin-top: 0.75rem; color: #059669; font-size: 0.95rem; font-weight: 500;">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div style="display: flex; align-items: center; gap: 1rem; margin-top: 1rem;">
            <button type="submit"
                style="padding: 0.75rem 1.5rem; background-color: #70B6B0; color: white; border: none; border-radius: 8px; font-weight: 500; cursor: pointer; transition: all 0.2s; font-size: 0.95rem;"
                onMouseOver="this.style.backgroundColor='#4A9690'" onMouseOut="this.style.backgroundColor='#70B6B0'">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    style="color: #059669; font-size: 0.95rem;">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>
