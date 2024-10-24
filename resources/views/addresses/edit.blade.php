<x-app-layout>
    <x-slot name="header">
        <div style="background: white; border-bottom: 1px solid #E2E8F0;">
            <div style="max-width: 80rem; margin: 0 auto; padding: 1.5rem;">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <h2 style="font-size: 2rem; font-weight: 700; color: #1A202C; letter-spacing: -0.025em;">
                        {{ __('Edit Address') }}
                    </h2>
                    <a href="{{ route('addresses.index') }}"
                        style="display: inline-flex; align-items: center; gap: 0.5rem; background-color: #2C7A7B; color: white; padding: 0.75rem 1.5rem; border-radius: 0.5rem; font-weight: 500; text-decoration: none; transition: all 0.2s ease-in-out; hover:background-color: #236c6d;">
                        <svg style="width: 20px; height: 20px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4">
                            </path>
                        </svg>
                        Go to Addresses
                    </a>
                </div>
            </div>
        </div>
    </x-slot>

    <div style="background-color: #F7FAFA; min-height: calc(100vh - 4rem); padding: 2rem 0;">
        <div style="max-width: 80rem; margin: 0 auto; padding: 0 1.5rem;">
            <form action="{{ route('addresses.update', $address->id) }}" method="POST"
                style="background: white; border-radius: 1rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); padding: 2rem;">
                @csrf
                @method('PUT')

                <div style="margin-bottom: 1.5rem;">
                    <label for="address_line_1" style="font-weight: 600; color: #2D3748;">Address Line 1</label>
                    <input type="text" name="address_line_1" id="address_line_1"
                        value="{{ $address->address_line_1 }}" required
                        style="width: 100%; padding: 0.75rem; border: 1px solid #E2E8F0; border-radius: 0.5rem; margin-top: 0.5rem;">
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label for="city" style="font-weight: 600; color: #2D3748;">City</label>
                    <input type="text" name="city" id="city" value="{{ $address->city }}" required
                        style="width: 100%; padding: 0.75rem; border: 1px solid #E2E8F0; border-radius: 0.5rem; margin-top: 0.5rem;">
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label for="state" style="font-weight: 600; color: #2D3748;">State</label>
                    <input type="text" name="state" id="state" value="{{ $address->state }}" required
                        style="width: 100%; padding: 0.75rem; border: 1px solid #E2E8F0; border-radius: 0.5rem; margin-top: 0.5rem;">
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label for="zip_code" style="font-weight: 600; color: #2D3748;">Zip Code</label>
                    <input type="text" name="zip_code" id="zip_code" value="{{ $address->zip_code }}" required
                        style="width: 100%; padding: 0.75rem; border: 1px solid #E2E8F0; border-radius: 0.5rem; margin-top: 0.5rem;">
                </div>

                <div style="margin-bottom: 2rem;">
                    <label for="country" style="font-weight: 600; color: #2D3748;">Country</label>
                    <input type="text" name="country" id="country" value="{{ $address->country }}" required
                        style="width: 100%; padding: 0.75rem; border: 1px solid #E2E8F0; border-radius: 0.5rem; margin-top: 0.5rem;">
                </div>

                <button type="submit"
                    style="display: inline-flex; justify-content: center; align-items: center; background-color: #2C7A7B; color: white; padding: 0.75rem 2rem; border-radius: 0.5rem; font-weight: 500; border: none; cursor: pointer; transition: all 0.2s ease-in-out; hover:background-color: #236c6d;">
                    Update Address
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
