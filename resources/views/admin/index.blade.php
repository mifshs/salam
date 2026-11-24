<x-app-layout>
    <h1>Административная панель</h1>

            <div class="grid grid-cols-4 p-5">
                @foreach($reports as $report)
                    <div>
                        ФИО
                        <h1>{{$report->user_id}}</h1>
                    </div>
                    <div>
                        Текст заявления
                        <h2>{{$report->description}}</h2>
                    </div>
                    <div>
                        Номер автомобиля
                        <h2>{{$report->number}}</h2>
                    </div>
                    <form action="{{route('reports.status.update', $report->id)}}" method="POST" class="status-form">
                        @method('patch')
                        @csrf
                        <div>
                        Статус заявки
                        <select name="status_id" id="status_id" class="h-10">
                            @foreach($statuses as $status)
                            <option value="{{$status->id}}" {{$status->id === $report->status_id ? 'selected' : ''}} {{ $status->id === 1 ? 'disabled' : '' }} >
                                {{$status->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    </form>
                @endforeach
            </div>
        </form>
    </div>
</x-app-layout>