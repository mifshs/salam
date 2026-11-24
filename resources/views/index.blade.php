<x-main-layout>
    <x-slot:title>
        Пример страницы
    </x-slot:title>
    @foreach($reports as $report)
        <div class="card">
            <h2>{{ $report->number }}</h2>
            <p>{{ $report->description }}</p>
            <p>{{ \Carbon\Carbon::parse($report->created_at)->translatedFormat('j F Y h:i'); }}</p>
            <p>{{ $report->status->name }}</p>
            <x-status :type="$report->status->id">
                {{$report->status->name}}
            </x-status>
            <a href="{{route('reports.edit', $report->id)}}">Редактировать</a>
        </div>
    @endforeach
</x-main-layout>