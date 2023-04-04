<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Dashboard</h1>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h1 class="card-title">Statistik Siswa</h1>
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h1 class="card-title">Statistik Pemakaian Lab</h1>
                                <canvas id="myPemakaian"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('/assets/js/chart.js') ?>"></script>
<script>
    const ctx = document.getElementById('myChart');
    const dataSiswa = <?= json_encode($dataSiswa) ?>;
    // console.log(dataSiswa);
    const labels1 = dataSiswa.map((item) => item.kelas);
    // console.log(labels1);
    const filterKelas = labels1.filter((item, index) => {
        return labels1.indexOf(item) === index;
    });
    // console.log(filterKelas);
    const data  = [];
    filterKelas.forEach((item) => {
        const filterByKelas = dataSiswa.filter((item2) => item2.kelas == item);
        data.push(filterByKelas.length);
    });
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: filterKelas,
            datasets: [{
                label: 'Data Siswa',
                data: data,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const pemakaian = document.getElementById('myPemakaian');
    const dataPemakaian = <?= json_encode($dataPemakaian) ?>;
    console.log(dataPemakaian);
    
    const tanggal = dataPemakaian.map((item) => item.tanggal);
    const filterByMonth = (month) => {
        return tanggal.filter((item) => {
            const date = new Date(item);
            return date.getMonth() == month;
        });
    }
    // get data pemakaian by month
    const dataPemakaianByMonth = [];
    for (let i = 0; i < 12; i++) {
        dataPemakaianByMonth.push(filterByMonth(i).length);
    }
    const labels = [
        'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    ];
    console.log(labels);
    const myPemakaian = new Chart(pemakaian, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Data Pemakaian Lab',
                data: dataPemakaianByMonth,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                ],
                borderWidth: 1
            }]
        }
    });
</script>
<?= $this->endSection() ?>