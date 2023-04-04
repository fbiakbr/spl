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
    const xtkj1 = dataSiswa.filter((item) => item.kelas == 'X TKJ 1');
    const xtkj2 = dataSiswa.filter((item) => item.kelas == 'X TKJ 2');
    const xtkj3 = dataSiswa.filter((item) => item.kelas == 'X TKJ 3');
    const xitkj1 = dataSiswa.filter((item) => item.kelas == 'XI TKJ 1');
    const xitkj2 = dataSiswa.filter((item) => item.kelas == 'XI TKJ 2');
    const xiitkj1 = dataSiswa.filter((item) => item.kelas == 'XII TKJ 1');
    const xiitkj2 = dataSiswa.filter((item) => item.kelas == 'XII TKJ 2');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['X TKJ 1', 'X TKJ 2', 'X TKJ 3', 'XI TKJ 1', 'XI TKJ 2', 'XII TKJ 1', 'XII TKJ 2'],
            datasets: [{
                label: 'Data Siswa',
                data: [
                    xtkj1.length,
                    xtkj2.length,
                    xtkj3.length,
                    xitkj1.length,
                    xitkj2.length,
                    xiitkj1.length,
                    xiitkj2.length
                ],
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
    // filter tanggal by month
    const filterByMonth = (month) => {
        return tanggal.filter((item) => {
            const date = new Date(item);
            return date.getMonth() == month;
        });
    }
    // get data pemakaian by month
    const dataPemakaianByMonth = [];
    for (let i = 0; i < 12; i++) {
        const date = new Date();
        date.setMonth(date.getMonth() - i);
        const data = filterByMonth(date.getMonth());
        dataPemakaianByMonth.push(data.length);
    }
    // get label by month
    const labels = [];
    for (let i = 0; i < 12; i++) {
        const date = new Date();
        date.setMonth(date.getMonth() - i);
        labels.push(date.toLocaleString('default', { month: 'long' }));
    }
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