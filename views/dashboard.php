<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin - LINDA SALON</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body { font-family: 'Roboto', Arial, sans-serif; background: #f4f6f9; margin: 0; }
        .container-admin { display: flex; min-height: 100vh; }
        .sidebar {
            width: 240px;
            background: #23282d;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 0;
        }
        .sidebar .brand {
            font-size: 1.3rem;
            font-weight: 700;
            letter-spacing: 1px;
            padding: 32px 32px 16px 32px;
            width: 100%;
            text-align: left;
            border-bottom: 1px solid #444;
        }
        .sidebar .menu {
            width: 100%;
            margin-top: 24px;
        }
        .sidebar .menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .sidebar .menu li {
            width: 100%;
        }
        .sidebar .menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #b4bcc2;
            text-decoration: none;
            padding: 12px 32px;
            font-size: 1rem;
            border-left: 4px solid transparent;
            transition: background 0.2s, border 0.2s, color 0.2s;
        }
        .sidebar .menu a.active, .sidebar .menu a:hover {
            background: #1e2227;
            color: #fff;
            border-left: 4px solid #007cba;
        }
        .main-content {
            flex: 1;
            padding: 40px 32px;
            background: #f4f6f9;
            min-height: 100vh;
        }
        .calendar-box {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            padding: 32px 24px 24px 24px;
            max-width: 900px;
            margin: 0 auto;
        }
        .calendar-header {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 18px;
        }
        .calendar-header h2 {
            font-size: 1.2rem;
            font-weight: 700;
            color: #23282d;
            margin: 0 16px;
            letter-spacing: 1px;
        }
        .calendar-table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
        }
        .calendar-table th, .calendar-table td {
            border: 1px solid #b3c6e0;
            width: 13.5%;
            height: 70px;
            text-align: left;
            vertical-align: top;
            font-size: 15px;
            padding: 6px 8px;
            position: relative;
        }
        .calendar-table th {
            background: #f4f6f9;
            color: #23282d;
            font-weight: 600;
            text-align: center;
        }
        .calendar-table td {
            background: #fff;
        }
        .calendar-table .date-number {
            font-size: 14px;
            font-weight: 500;
            color: #1976d2;
            position: absolute;
            top: 6px;
            left: 8px;
        }
        @media (max-width: 900px) {
            .main-content { padding: 16px 4px; }
            .calendar-box { padding: 12px 2px; }
            .sidebar { width: 100px; }
        }
    </style>
</head>
<body>
<div class="container-admin">
    <div class="sidebar">
        <div class="brand">LINDA SALON</div>
        <nav class="menu">
            <ul>
                <li><a href="?page=dashboard" class="active"><i class="fas fa-tachometer-alt"></i> Menu Admin</a></li>
                <li><a href="?page=user"><i class="fas fa-users"></i> Data User</a></li>
                <li><a href="?page=product"><i class="fas fa-box"></i> Data Produk</a></li>
                <li><a href="?page=wedding"><i class="fas fa-gift"></i> Data Paket Pernikahan</a></li>
                <li><a href="?page=booking"><i class="fas fa-calendar"></i> Data Booking</a></li>
                <li style="margin-top:32px;"><a href="?page=logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </nav>
    </div>
    <div class="main-content">
        <div class="calendar-box">
            <div class="calendar-header">
                <button onclick="prevMonth()" style="background:none;border:none;font-size:1.2rem;cursor:pointer;color:#1976d2;"><i class="fas fa-chevron-left"></i></button>
                <h2 id="calendar-month">November 2018</h2>
                <button onclick="nextMonth()" style="background:none;border:none;font-size:1.2rem;cursor:pointer;color:#1976d2;"><i class="fas fa-chevron-right"></i></button>
            </div>
            <table class="calendar-table">
                <thead>
                    <tr>
                        <th>S</th><th>M</th><th>T</th><th>W</th><th>T</th><th>F</th><th>S</th>
                    </tr>
                </thead>
                <tbody id="calendar-body">
                    <!-- Kalender diisi JS -->
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
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
    for (let j = 0; j < 7; j++) {
      if (i === 0 && j < firstDay) {
        calendar += '<td></td>';
      } else if (date > daysInMonth) {
        calendar += '<td></td>';
      } else {
        calendar += `<td><span class='date-number'>${date}</span></td>`;
        date++;
      }
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
</body>
</html>
