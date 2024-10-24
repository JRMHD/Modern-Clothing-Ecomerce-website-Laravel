<x-app-layout>
    <x-slot name="header">
        <div style="background: white; border-bottom: 1px solid #E2E8F0;">
            <div style="max-width: 80rem; margin: 0 auto; padding: 1.5rem;">
                <h2 style="font-size: 2rem; font-weight: 700; color: #1A202C; letter-spacing: -0.025em;">
                    {{ __('My Orders') }}
                </h2>
            </div>
        </div>
    </x-slot>

    <div style="background-color: #F7FAFA; min-height: calc(100vh - 4rem); padding: 2rem 0;">
        <div style="max-width: 80rem; margin: 0 auto; padding: 0 1.5rem;">
            <main>
                @if ($orders->isEmpty())
                    <div
                        style="background: white; border-radius: 1rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); padding: 4rem 2rem; text-align: center;">
                        <div
                            style="background-color: #ECF5F4; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                            <svg style="width: 40px; height: 40px;" fill="none" stroke="#2C7A7B" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                        <h3 style="font-size: 1.5rem; font-weight: 600; color: #2D3748; margin-bottom: 0.5rem;">No
                            Orders Yet</h3>
                        <p style="color: #64748B; font-size: 1.125rem;">Start shopping to see your orders here</p>
                    </div>
                @else
                    @foreach ($orders as $order)
                        <div
                            style="background: white; border-radius: 1rem; box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1); margin-bottom: 2rem; overflow: hidden;">
                            <!-- Order Header -->
                            <div style="background-color: #ECF5F4; padding: 1.5rem;">
                                <div
                                    style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                                    <div>
                                        <span style="font-size: 0.875rem; color: #64748B;">Order placed</span>
                                        <h2 style="font-size: 1.25rem; font-weight: 700; color: #1A202C;">
                                            #{{ $order->id }}
                                        </h2>
                                    </div>
                                    <div style="text-align: right;">
                                        <span
                                            style="display: inline-block; background-color: white; padding: 0.5rem 1rem; border-radius: 9999px; font-size: 0.875rem; font-weight: 500; color: #2C7A7B;">
                                            {{ ucfirst($order->status) }}
                                        </span>
                                    </div>
                                </div>
                                <div
                                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem;">
                                    <div>
                                        <span style="font-size: 0.875rem; color: #64748B;">Total Amount</span>
                                        <p style="font-size: 1.25rem; font-weight: 600; color: #2D3748;">
                                            ${{ number_format($order->total_amount, 2) }}</p>
                                    </div>
                                    <div>
                                        <span style="font-size: 0.875rem; color: #64748B;">Shipping Address</span>
                                        <p style="font-size: 1rem; color: #4A5568;">{{ $order->shipping_address }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Order Items -->
                            <div style="padding: 1.5rem;">
                                @foreach ($order->orderItems as $item)
                                    <div
                                        style="display: flex; gap: 1.5rem; padding: 1.5rem; background-color: #F8FAFB; border-radius: 0.75rem; margin-bottom: 1rem;">
                                        <!-- Main Product Image -->
                                        <div style="width: 120px; flex-shrink: 0;">
                                            @if ($item->product->image)
                                                <img src="{{ asset('storage/' . $item->product->image) }}"
                                                    alt="{{ $item->product->title }}"
                                                    style="width: 120px; height: 120px; object-fit: cover; border-radius: 0.5rem; box-shadow: 0 1px 2px rgba(0,0,0,0.1);">
                                            @endif
                                        </div>

                                        <!-- Product Details -->
                                        <div style="flex-grow: 1;">
                                            <div
                                                style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 0.75rem;">
                                                <h3 style="font-size: 1.125rem; font-weight: 600; color: #2D3748;">
                                                    {{ $item->product->title }}
                                                </h3>
                                                <p style="font-size: 1.125rem; font-weight: 600; color: #2D3748;">
                                                    ${{ number_format($item->price * $item->quantity, 2) }}
                                                </p>
                                            </div>

                                            <p style="color: #64748B; margin-bottom: 1rem;">
                                                Quantity: {{ $item->quantity }}
                                            </p>

                                           
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                @endif
            </main>
        </div>
    </div>
</x-app-layout>
