<section
    style="max-width: 768px; margin: 2rem auto; padding: 2rem; background: white; border-radius: 16px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); background-color: #ffffff;">
    <header style="margin-bottom: 2rem; position: relative;">
        <div style="position: relative; padding-left: 1rem; margin-bottom: 1.5rem;">
            <div
                style="position: absolute; left: 0; top: 0; bottom: 0; width: 4px; background: linear-gradient(to bottom, #FEE2E2, #EF4444); border-radius: 4px;">
            </div>
            <h2 style="font-size: 1.5rem; font-weight: 600; color: #2D3748; margin: 0;">
                {{ __('Delete Account') }}
            </h2>
            <p style="margin-top: 0.75rem; color: #718096; font-size: 0.95rem; line-height: 1.5;">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
            </p>
        </div>
    </header>

    <button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        style="padding: 0.75rem 1.5rem; background-color: #fee2e2; color: #dc2626; border: 1px solid #fecaca; border-radius: 8px; font-weight: 500; cursor: pointer; transition: all 0.2s; font-size: 0.95rem; display: flex; align-items: center; gap: 0.5rem;"
        onMouseOver="this.style.backgroundColor='#fecaca'" onMouseOut="this.style.backgroundColor='#fee2e2'">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            style="width: 1.25rem; height: 1.25rem;">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
        </svg>
        {{ __('Delete Account') }}
    </button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}"
            style="padding: 2rem; background: white; border-radius: 12px; max-width: 500px; width: 100%;">
            @csrf
            @method('delete')

            <div style="position: relative; margin-bottom: 1.5rem;">
                <div
                    style="position: absolute; left: -1rem; top: 0; bottom: 0; width: 4px; background: linear-gradient(to bottom, #FEE2E2, #EF4444); border-radius: 4px;">
                </div>
                <h2 style="font-size: 1.25rem; font-weight: 600; color: #2D3748; margin: 0;">
                    {{ __('Are you sure you want to delete your account?') }}
                </h2>
                <p style="margin-top: 0.75rem; color: #718096; font-size: 0.95rem; line-height: 1.5;">
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                </p>
            </div>

            <div style="margin-top: 1.5rem;">
                <label for="password" class="sr-only">{{ __('Password') }}</label>
                <input id="password" name="password" type="password" placeholder="{{ __('Password') }}"
                    style="width: 100%; padding: 0.75rem 1rem; border: 1px solid #E2E8F0; border-radius: 8px; font-size: 1rem; transition: all 0.2s; background-color: #F8FAFB;"
                    onFocus="this.style.borderColor='#EF4444'; this.style.boxShadow='0 0 0 3px rgba(254, 226, 226, 0.5)'"
                    onBlur="this.style.borderColor='#E2E8F0'; this.style.boxShadow='none'" />
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div style="margin-top: 2rem; display: flex; justify-content: flex-end; gap: 1rem;">
                <button type="button" x-on:click="$dispatch('close')"
                    style="padding: 0.75rem 1.5rem; background-color: #F3F4F6; color: #4B5563; border: none; border-radius: 8px; font-weight: 500; cursor: pointer; transition: all 0.2s; font-size: 0.95rem;"
                    onMouseOver="this.style.backgroundColor='#E5E7EB'"
                    onMouseOut="this.style.backgroundColor='#F3F4F6'">
                    {{ __('Cancel') }}
                </button>

                <button type="submit"
                    style="padding: 0.75rem 1.5rem; background-color: #EF4444; color: white; border: none; border-radius: 8px; font-weight: 500; cursor: pointer; transition: all 0.2s; font-size: 0.95rem;"
                    onMouseOver="this.style.backgroundColor='#DC2626'"
                    onMouseOut="this.style.backgroundColor='#EF4444'">
                    {{ __('Delete Account') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>
