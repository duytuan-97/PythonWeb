@extends('layouts.metronic.app')
@section('title', 'Project')
@section('content')
    <div class="card">
        <!--begin::Body-->
        <div class="card-body">
            <div class="tab-content pt-3">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800">
                                <th>He Thong</th>
                                <th>Thiet Bi</th>
                                <th>Thong So</th>
                                {{-- @foreach ($projects->systems[0]->specifications[0]->checklists as $item_checklist) --}}
                                {{-- @dd($projects->systems[0]->checklists()[0]) --}}
                                @foreach ($projects->systems[0]->checklists()[0] as $item_checklist)
                                    <th>{{date('d-m-Y', strtotime($item_checklist->date))}}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @php($check_system = 1)
                            @php($check_device = 1)
                            @php($check_specification = 1)
                            @foreach ($projects->systems as $key_system => $item_system)
                                @foreach ($item_system->devices as $key_device => $item_device)
                                    @foreach ($item_device->specifications as $key_specification => $item_specification)
                                        <tr>
                                            @if ($check_system != $key_system)
                                                <td rowspan={{ $item_system->specifications->count() }}>System
                                                    {{ $item_system->id }} - {{ $item_system->name }}</td>
                                                @php($check_system = $key_system)
                                            @endif
                                            @if ($check_device != $key_device)
                                                <td rowspan={{ $item_device->specifications->count() }}>
                                                    Device {{ $item_device->id }} - {{ $item_device->name }}
                                                    @php($check_device = $key_device)
                                                </td>
                                            @endif
                                            @if ($check_specification != $key_specification)
                                                <td>
                                                    Specification {{ $item_specification->id }} -
                                                    {{ $item_specification->name }}
                                                    @php($check_specification = $key_specification)
                                                </td>
                                            @endif
                                            @foreach ($item_specification->checklists as $key_checklist => $item_checklist)
                                                <td>checklist {{ $item_checklist->id }} -
                                                    {{ $item_checklist->value }}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                @endforeach
                            @endforeach
                            {{-- @foreach ($projects->systems as $key_system => $item_system)
                                @foreach ($item_system->devices as $key_device => $item_device)
                                    @foreach ($item_device->specifications as $key_specification => $item_specification)
                                    @foreach ($item_specification->checklists as $key_checklist => $item_checklist)
                                        <tr>
                                            @if ($check_system != $key_system)
                                                <td rowspan={{ $item_system->specifications->count() }}>System
                                                    {{ $item_system->id }} - {{ $item_system->name }}</td>
                                                @php($check_system = $key_system)
                                            @endif
                                            @if ($check_device != $key_device)
                                                <td rowspan={{ $item_device->specifications->count() }}>
                                                    Device {{ $item_device->id }} - {{ $item_device->name }}
                                                    @php($check_device = $key_device)
                                                </td>
                                            @endif
                                            @if ($check_specification != $key_specification)
                                                <td rowspan={{ $item_device->specifications->count() }}>
                                                    Device {{ $item_device->id }} - {{ $item_device->name }}
                                                    @php($check_device = $key_device)
                                                </td>
                                            @endif
                                            <td>Specification {{ $item_specification->id }} -
                                                {{ $item_specification->name }}</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
