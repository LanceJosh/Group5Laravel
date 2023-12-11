<x-action-section style="border: 2px solid #ccc; padding: 20px; border-radius: 10px; margin: 20px;">
    <x-slot name="title">
        <h2 style="font-size: 1.5rem; color: #333;">{{ __('Delete Account') }}</h2>
    </x-slot>

    <x-slot name="description">
        <p style="color: #666;">{{ __('Permanently delete your account.') }}</p>
    </x-slot>

    <x-slot name="content">
        <div style="max-width: 400px; text-align: left; margin-top: 20px; color: #666;">
            <p>{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}</p>
        </div>

        <div style="margin-top: 20px;">
            <x-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled" style="background-color: #e74c3c; color: #fff; border: 1px solid #c0392b; padding: 10px 15px; border-radius: 5px; cursor: pointer;">
                {{ __('Delete Account') }}
            </x-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-dialog-modal wire:model="confirmingUserDeletion" style="background-color: #fff; padding: 20px; border-radius: 10px; margin-top: 20px;">
            <x-slot name="title">
                <h2 style="font-size: 1.5rem; color: #333;">{{ __('Delete Account') }}</h2>
            </x-slot>

            <x-slot name="content">
                <p style="color: #666;">{{ __('Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}</p>

                <div style="margin-top: 20px;" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-input type="password" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50"
                                autocomplete="current-password"
                                placeholder="{{ __('Password') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-input-error for="password" class="mt-2" style="color: #e74c3c;" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled" style="background-color: #95a5a6; color: #fff; border: 1px solid #7f8c8d; padding: 10px 15px; border-radius: 5px; cursor: pointer;">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ml-3" wire:click="deleteUser" wire:loading.attr="disabled" style="background-color: #e74c3c; color: #fff; border: 1px solid #c0392b; padding: 10px 15px; border-radius: 5px; cursor: pointer;">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </x-slot>
        </x-dialog-modal>
    </x-slot>
</x-action-section>

