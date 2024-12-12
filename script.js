// Simpan sebagai script.js
const mobilData = [
    { id: 1, nama: "Toyota Avanza", harga: 300000, gambar: "avanza.jpg" },
    { id: 2, nama: "Honda Brio", harga: 250000, gambar: "brio.jpg" },
    { id: 3, nama: "Mitsubishi Pajero", harga: 500000, gambar: "pajero.jpg" }
];

const tableBody = document.getElementById('mobil-data');

mobilData.forEach(mobil => {
    const row = document.createElement('tr');

    row.innerHTML = `
        <td>${mobil.id}</td>
        <td>${mobil.nama}</td>
        <td>Rp ${mobil.harga}</td>
        <td><img src="images/${mobil.gambar}" alt="${mobil.nama}" width="100"></td>
    `;

    tableBody.appendChild(row);
});