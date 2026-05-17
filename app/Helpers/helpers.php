<?php


if (!function_exists('buttonDatatables')) {

    function buttonDatatables($buttonsType = [], $title = '')
    {

        $buttons = [];
        // Configure the export columns selector. We are not going to export
        // columns that explicitly have the 'dt-no-export' attribute.

        $colSelector = ':not([dt-no-export])';

        // Button to change the page length of tables.

        if (in_array('pageLength', $buttonsType)) {
            $buttons[] =
                [
                    'extend' => 'pageLength',
                    'className' => 'btn-default',
                ];
        }
        // Button to print the data.

        if (in_array('print', $buttonsType)) {
            $buttons[] = [
                'extend' => 'print',
                'className' => 'btn-default',
                'text' => '<i class="bi bi-printer"></i>',
                'titleAttr' => 'Print',
                'exportOptions' => ['columns' => $colSelector],
                'title' => $title
            ];
        }




        // Button to export data to CSV file.
        if (in_array('csv', $buttonsType)) {
            $buttons[] = [
                'extend' => 'csv',
                'className' => 'btn-default',
                'text' => '<i class="bi bi-filetype-csv text-primary"></i>',
                'titleAttr' => 'Export to CSV',
                'exportOptions' => ['columns' => $colSelector],
                'filename' => $title,
                'title' => null
            ];
        }

        // Button to export data to Excel file.
        if (in_array('excel', $buttonsType)) {
            $buttons[] = [
                'extend' => 'excel',
                'className' => 'btn-default',
                'text' => '<i class="bi bi-file-earmark-excel-fill text-success"></i>',
                'titleAttr' => 'Export to Excel',
                'exportOptions' => ['columns' => $colSelector],
                'filename' => $title,
                'title' => null
            ];
        }

        // Button to export data to PDF file.
        if (in_array('pdf', $buttonsType)) {
            $buttons[] = [
                'extend' => 'pdf',
                'className' => 'btn-default',
                'text' => '<i class="bi bi-file-earmark-pdf-fill text-danger"></i>',
                'titleAttr' => 'Export to PDF',
                'orientation' => 'landscape',
                'exportOptions' => ['columns' => $colSelector],
                'title' => $title
            ];
        }

        // Return the set of configured buttons.

        return $buttons;
    }
}
