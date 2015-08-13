<h1>Subscriber management</h1>
<?php echo $this->table->generate(); ?>

<script type="text/javascript">
    $(document).ready(function () {
        var oTable = $('#big_table').dataTable({
            "bProcessing": true,
            "bServerSide": true,
            "sAjaxSource": '<?php echo base_url(); ?>index.php/masterguru/datatable',
            "bJQueryUI": true,
            "sPaginationType": "full_numbers",
            "iDisplayStart ": 20,
            "oLanguage": {
                "sProcessing": "<img src='<?php echo base_url(); ?>assets/images/ajax-loader_dark.gif'>"
            },
            "fnInitComplete": function () {
                //oTable.fnAdjustColumnSizing();
            },
            'fnServerData': function (sSource, aoData, fnCallback) {
                $.ajax
                ({
                    'dataType': 'json',
                    'type': 'POST',
                    'url': sSource,
                    'data': aoData,
                    'success': fnCallback
                });
            },
            'aoColumns': [
			{ "data": "nip" },
			{ "data": "nama_guru" },
			{ "data": "tanggal_lahir"},
			{ "data": "jenis_kelamin" },
			{ "data": "alamat"},
			{ "data": "agama" },
			{ "data": "pendidikan"},
			{ "data": "telepon"}
			],
        });
    });
</script>