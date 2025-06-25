<div class="wp-admin-wrapper">
  <!-- Sidebar -->
  <nav class="wp-sidebar bg-dark text-white d-flex flex-column p-0">
    <div class="sidebar-header text-center py-4 mb-2 border-bottom border-secondary">
      <span style="font-size:1.5rem;font-weight:700;letter-spacing:1px;">LINDA SALON</span>
    </div>
    <ul class="nav flex-column wp-menu">
      <li class="nav-item mb-1"><a href="?page=dashboard" class="nav-link active"><i class="fas fa-tachometer-alt"></i> <span class="ml-2">Dashboard</span></a></li>
      <li class="nav-item mb-1"><a href="?page=user" class="nav-link"><i class="fas fa-users"></i> <span class="ml-2">Data User</span></a></li>
      <li class="nav-item mb-1"><a href="?page=product" class="nav-link"><i class="fas fa-box"></i> <span class="ml-2">Data Produk</span></a></li>
      <li class="nav-item mb-1"><a href="?page=wedding" class="nav-link"><i class="fas fa-gift"></i> <span class="ml-2">Data Paket Wedding</span></a></li>
      <li class="nav-item mb-1"><a href="?page=booking" class="nav-link"><i class="fas fa-calendar"></i> <span class="ml-2">Data Booking</span></a></li>
    </ul>
  </nav>
  <!-- Main Content -->
  <div class="wp-main-content">
    <div class="wp-topbar bg-white d-flex align-items-center justify-content-between px-4 py-3 border-bottom">
      <div class="h4 mb-0 font-weight-bold">Dashboard</div>
      <div class="user-info d-flex align-items-center">
        <i class="fas fa-user-circle fa-lg mr-2 text-secondary"></i>
        <span class="font-weight-bold text-secondary">Admin</span>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="card shadow-sm">
            <div class="card-body">
              <div class="calendar-container">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <h5 class="mb-0" id="calendar-month">November 2018</h5>
                  <div>
                    <button class="btn btn-sm btn-outline-primary" onclick="prevMonth()"><i class="fas fa-chevron-left"></i></button>
                    <button class="btn btn-sm btn-outline-primary" onclick="nextMonth()"><i class="fas fa-chevron-right"></i></button>
                  </div>
                </div>
                <table class="table table-bordered text-center" id="calendar-table">
                  <thead class="thead-light">
    <tr>
        <th>M</th><th>T</th><th>W</th><th>T</th><th>F</th><th>S</th><th>S</th>
    </tr>
                  </thead>
                  <tbody id="calendar-body">
                    <!-- Kalender akan diisi oleh JS -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
// Kalender dinamis
const monthNames = [
  'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
  'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
];
let today = new Date();
let currentMonth = today.getMonth();
let currentYear = today.getFullYear();

function renderCalendar(month, year) {
  const firstDay = new Date(year, month, 1).getDay();
  const daysInMonth = new Date(year, month + 1, 0).getDate();
  let date = 1;
  let calendar = '';
  for (let i = 0; i < 6; i++) {
    calendar += '<tr>';
    for (let j = 1; j <= 7; j++) {
      let cellDay = (i === 0 && j < ((firstDay === 0 ? 7 : firstDay))) ? '' : (date <= daysInMonth ? date : '');
      if (cellDay !== '') date++;
      calendar += `<td>${cellDay}</td>`;
    }
    calendar += '</tr>';
    if (date > daysInMonth) break;
  }
  document.getElementById('calendar-body').innerHTML = calendar;
  document.getElementById('calendar-month').innerText = monthNames[month] + ' ' + year;
}
function prevMonth() {
  currentMonth--;
  if (currentMonth < 0) {
    currentMonth = 11;
    currentYear--;
  }
  renderCalendar(currentMonth, currentYear);
}
function nextMonth() {
  currentMonth++;
  if (currentMonth > 11) {
    currentMonth = 0;
    currentYear++;
  }
  renderCalendar(currentMonth, currentYear);
}
renderCalendar(currentMonth, currentYear);
</script>
<style>
.wp-admin-wrapper {
  display: flex;
  min-height: 80vh;
}
.wp-sidebar {
  width: 230px;
  min-height: 100vh;
  background: #23282d !important;
  color: #fff;
  border-right: 1px solid #222;
}
.wp-sidebar .sidebar-header {
  background: #23282d;
  color: #fff;
  font-size: 1.3rem;
  font-weight: 700;
  letter-spacing: 1px;
}
.wp-menu .nav-link {
  color: #b4bcc2;
  border-radius: 4px;
  padding: 10px 18px;
  font-size: 1rem;
  transition: background 0.2s, color 0.2s;
}
.wp-menu .nav-link.active, .wp-menu .nav-link:hover {
  background: #007cba;
  color: #fff;
}
.wp-menu .nav-link i { width: 20px; text-align: center; }
.wp-main-content {
  flex: 1;
  background: #f4f6f9;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}
.wp-topbar {
  min-height: 56px;
  border-bottom: 1px solid #e0e0e0;
  background: #fff;
  position: sticky;
  top: 0;
  z-index: 10;
}
.card { border-radius: 10px; }
.calendar-container { max-width: 700px; margin: 0 auto; }
#calendar-table { background: #fff; }
#calendar-table th, #calendar-table td { width: 40px; height: 40px; vertical-align: middle; font-size: 16px; }
#calendar-table th { background: #f4f6f9; font-weight: 600; }
#calendar-month { font-weight: 600; }
</style> 