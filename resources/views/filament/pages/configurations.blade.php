<x-filament::page>

    <div class="my-2 grid grid-cols-12 rounded-md border-b-2 border-b-danger-500">
        <label class="col-span-12 md:col-span-4">Landing Page Headline</label>
        <div class="col-span-12 md:col-span-8">
            <input class="px-2 py-2 w-full" wire:model="landing_page_headline">
        </div>

    </div>
    <div class="my-2 grid grid-cols-12 rounded-md border-b-2 border-b-danger-500">
        <label class="col-span-12 md:col-span-4">Landing Page Sub Title</label>
        <div class="col-span-12 md:col-span-8">
            <input class="px-2 py-2 w-full" wire:model="landing_page_sub_headline">
        </div>

    </div>
    <div class="my-2 grid grid-cols-12 rounded-md border-b-2 border-b-danger-500">
        <label class="col-span-12 md:col-span-4">Landing Page Tagline</label>
        <div class="col-span-12 md:col-span-8">
            <input class="px-2 py-2 w-full" wire:model="landing_page_tagline">
        </div>

    </div>
    <div class="my-2 grid grid-cols-12 rounded-md border-b-2 border-b-danger-500">
        <label class="col-span-12 md:col-span-4">Blog Page Headline</label>
        <div class="col-span-12 md:col-span-8">
            <input class="px-2 py-2 w-full" wire:model="blog_page_headline">
        </div>

    </div>
    <div class="my-2 grid grid-cols-12 rounded-md border-b-2 border-b-danger-500">
        <label class="col-span-12 md:col-span-4">Blog Page Sub Headline</label>
        <div class="col-span-12 md:col-span-8">
            <input class="px-2 py-2 w-full" wire:model="blog_page_sub_headline">
        </div>

    </div>
    <div class="my-2 grid grid-cols-12 rounded-md border-b-2 border-b-danger-500">
        <label class="col-span-12 md:col-span-4">Blog Page Tagline</label>
        <div class="col-span-12 md:col-span-8">
            <input class="px-2 py-2 w-full" wire:model="blog_page_tagline">
        </div>
    </div>
    <div class="my-2 grid grid-cols-12 rounded-md border-b-2 border-b-danger-500">
        <label class="col-span-12 md:col-span-4">Slogan</label>
        <div class="col-span-12 md:col-span-8">
            <input class="px-2 py-2 w-full" wire:model="slogan">
        </div>
    </div>


    <div>
        <button class="px-6 py-3 bg-primary-500 rounded-md" wire:click="saveConfiguration">Save Settings</button>
        <button class="px-6 py-3 bg-danger-500 rounded-md" wire:click="resetConfiguration">Reset Configuration to default</button>
    </div>



    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
</x-filament::page>