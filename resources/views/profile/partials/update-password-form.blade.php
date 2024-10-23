<section
    style="max-width: 768px; margin: 2rem auto; padding: 2rem; background: white; border-radius: 16px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); background-color: #ffffff;">
    <header style="margin-bottom: 2rem; position: relative;">
        <div style="position: relative; padding-left: 1rem; margin-bottom: 1.5rem;">
            <div
                style="position: absolute; left: 0; top: 0; bottom: 0; width: 4px; background: linear-gradient(to bottom, #ECF5F4, #70B6B0); border-radius: 4px;">
            </div>
            <h2 style="font-size: 1.5rem; font-weight: 600; color: #2D3748; margin: 0;">
                {{ __('Update Password') }}
            </h2>
            <p style="margin-top: 0.5rem; color: #718096; font-size: 0.95rem;">
                {{ __('Ensure your account is using a long, random password to stay secure.') }}
            </p>
        </div>
    </header>

    <form method="post" action="{{ route('password.update') }}"
        style="display: flex; flex-direction: column; gap: 1.5rem;">
        @csrf
        @method('put')

        <div style="display: flex; flex-direction: column; gap: 0.5rem;">
            <label for="update_password_current_password" style="font-weight: 500; color: #4A5568; font-size: 0.95rem;">
                {{ __('Current Password') }}
            </label>
            <div style="position: relative;">
                <input id="update_password_current_password" name="current_password" type="password"
                    autocomplete="current-password"
                    style="width: 100%; padding: 0.75rem 1rem; border: 1px solid #E2E8F0; border-radius: 8px; font-size: 1rem; transition: all 0.2s; background-color: #F8FAFB;"
                    onFocus="this.style.borderColor='#70B6B0'; this.style.boxShadow='0 0 0 3px rgba(236, 245, 244, 0.3)'"
                    onBlur="this.style.borderColor='#E2E8F0'; this.style.boxShadow='none'" />
                <div style="position: absolute; right: 1rem; top: 50%; transform: translateY(-50%); color: #718096;">
                    <!-- You can add a password visibility toggle icon here if desired -->
                </div>
            </div>
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div style="display: flex; flex-direction: column; gap: 0.5rem;">
            <label for="update_password_password" style="font-weight: 500; color: #4A5568; font-size: 0.95rem;">
                {{ __('New Password') }}
            </label>
            <div style="position: relative;">
                <input id="update_password_password" name="password" type="password" autocomplete="new-password"
                    style="width: 100%; padding: 0.75rem 1rem; border: 1px solid #E2E8F0; border-radius: 8px; font-size: 1rem; transition: all 0.2s; background-color: #F8FAFB;"
                    onFocus="this.style.borderColor='#70B6B0'; this.style.boxShadow='0 0 0 3px rgba(236, 245, 244, 0.3)'"
                    onBlur="this.style.borderColor='#E2E8F0'; this.style.boxShadow='none'" />
            </div>
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div style="display: flex; flex-direction: column; gap: 0.5rem;">
            <label for="update_password_password_confirmation"
                style="font-weight: 500; color: #4A5568; font-size: 0.95rem;">
                {{ __('Confirm Password') }}
            </label>
            <div style="position: relative;">
                <input id="update_password_password_confirmation" name="password_confirmation" type="password"
                    autocomplete="new-password"
                    style="width: 100%; padding: 0.75rem 1rem; border: 1px solid #E2E8F0; border-radius: 8px; font-size: 1rem; transition: all 0.2s; background-color: #F8FAFB;"
                    onFocus="this.style.borderColor='#70B6B0'; this.style.boxShadow='0 0 0 3px rgba(236, 245, 244, 0.3)'"
                    onBlur="this.style.borderColor='#E2E8F0'; this.style.boxShadow='none'" />
            </div>
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div style="display: flex; align-items: center; gap: 1rem; margin-top: 1rem;">
            <button type="submit"
                style="padding: 0.75rem 1.5rem; background-color: #70B6B0; color: white; border: none; border-radius: 8px; font-weight: 500; cursor: pointer; transition: all 0.2s; font-size: 0.95rem;"
                onMouseOver="this.style.backgroundColor='#4A9690'" onMouseOut="this.style.backgroundColor='#70B6B0'">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    style="color: #059669; font-size: 0.95rem;">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>
