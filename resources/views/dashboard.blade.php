<x-layouts::app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <section>
            <flux:heading size="xl">{{ $flier?->title ?? __('Untitled Flier') }}</flux:heading>
            <flux:subheading>{{ __('Preview') }}</flux:subheading>
        </section>
        <article class="rounded-lg border border-zinc-200 bg-zinc-100 p-4 dark:border-zinc-700 dark:bg-zinc-950">
{{--            @include($this->templateView, ['flier' => $flier, 'design' => $this->design])--}}
        </article>
    </div>
</x-layouts::app>
