@props(['id' => 'table', 'heads' => [], 'config' => [], 'striped' => false, 'bordered' => false, 'select' => false, 'paging' => false])

@once
    @push('css')
        <link href="{{ asset('assets/css/extensions/datatables.min.css') }}" rel="stylesheet">
    @endpush
@endonce

<div class="table-responsive">
    <table id="{{ $id }}" {{ $attributes->merge(['class' => 'table' . ($striped ? ' table-striped' : '') . ($bordered ? ' table-bordered' : '')]) }}>
        <thead>
            <tr>

                @foreach($heads as $head)
                    @if(is_array($head))
                        <th width="{{ $head['width'] ?? '' }}" class="{{ $head['classes'] ?? '' }}">
                            {{ $head['label'] ?? '' }}
                        </th>
                    @else
                        <th>{{ $head }}</th>
                    @endif
                @endforeach
            </tr>
        </thead>
        <tbody>
            @if($slot->isNotEmpty())
                {{ $slot }}
            @endif
        </tbody>
    </table>
</div>

@once
    @push('js')
        <script src="{{ asset('assets/js/extensions/datatables.min.js') }}"></script>
    @endpush
@endonce

@push('js')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let dtConfig = @json($config ?: []);
            $.fn.dataTable.Buttons.defaults.dom.button.className = 'btn btn-light';
            $.extend(true, $.fn.dataTable.defaults, {
                language: {
                    url: '{{ asset('datatables/lang/ms.json') }}',
                    lengthLabel: {
                        '-1': 'Semua'
                    }
                },
            });

            @if ($select)
                dtConfig.columnDefs = [
                    {
                        render: DataTable.render.select(),
                        targets: 0
                    }
                ];
                dtConfig.select = {
                    style: 'multi',
                    selector: 'td:first-child',
                    headerCheckbox: 'select-page'
                };
            @endif

            @if ($paging)
                dtConfig.layout = {
                    topStart: 'buttons',
                    topEnd: 'search',
                    bottomStart: 'paging',
                    bottomEnd: 'info',

                }
                dtConfig.paging = true;
                dtConfig.lengthMenu = [10, 25, 50, {
                    label: 'Semua',
                    value: -1
                }];
            @endif

            $('#{{ $id }}').DataTable(dtConfig);

        });
    </script>
@endpush