$(document).ready(function () {
  var dataTable = new DataTable('#example', {
    stateSave: true,
    scrollX: true,
    scrollY: true,
    language: {
      info: 'Sayfa _PAGE_ / _PAGES_ gösteriliyor',
      infoEmpty: 'Kayit bulunamadi',
      infoFiltered: '(_MAX_ toplam kayıttan filtrelendi)',
      lengthMenu: 'Sayfa başına _MENU_ kayıt görüntüle',
      zeroRecords: 'Hiçbir kayıt bulunamadı',
      search: 'Ara:',
      paginate: {
        first: 'Baş',
        last: 'Son',
        next: 'Sonraki',
        previous: 'Önceki',
      },
    },

    dom: 'Bfrtip',
    buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
  });

  $('#example').dataTable();
  dataTable.order(['0', 'desc']).draw();
});

function printPage(url) {
  var printWindow = window.open(url, '_blank');
  printWindow.onload = function () {
    printWindow.print();
  };
}
