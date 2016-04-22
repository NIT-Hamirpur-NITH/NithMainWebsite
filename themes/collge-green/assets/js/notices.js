$(function() {

    var table = $('#notices-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/all-notices/ajax',
        columns: [{
                name: 'title',
                data: 'title',
                render : function(data, type, row, meta) {
                    return '<a class="title" href="/notice/' + row.id + '">' + data + '</a>';

                }
            }, {
                name: 'type',
                data: 'type',
                render: function(data, type, row, meta) {
                    console.log(row);
                    if (Number(data) === 0) {
                        return 'Others';
                    } else if (Number(data) === 1) {
                        return 'Academics';
                    } else if (Number(data) === 2) {
                        return 'Administration';
                    }
                }
            }, {
                name: 'updated_at',
                data: 'updated_at',
                render: function(data, type, row, meta) {
                    var date = new Date(data.slice(0,10));
                    return date.toLocaleDateString();
                }
            }
        ],
    });

});
