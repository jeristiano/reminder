<x-app-layout>


    <div class="mt-10 container mx-auto px-8 md:w-2/4">
        <div class="border-t divide-gray-400">
            <livewire:content-edit :content="$content" :tags="$tags" :page="$page" :key="$content->id"/>
        </div>
    </div>

</x-app-layout>
