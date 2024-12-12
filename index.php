
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-container">
            <h1>Sixt - Rent a Vehicle</h1>
        </div>
    </header>
    <main>
        <section class="search-container">
            <form class="search-form">
                <div class="form-group">
                    <label for="pickup-location">Pick-up Location</label>
                    <input type="text" id="pickup-location" placeholder="Airport, city or address">
                </div>
                <div class="form-group">
                    <label for="pickup-date">Pick-up Date</label>
                    <input type="date" id="pickup-date">
                </div>
                <div class="form-group">
                    <label for="return-date">Return Date</label>
                    <input type="date" id="return-date">
                </div>
                <button type="submit" class="search-btn">Search Vehicles</button>
            </form>
        </section>
        <section class="promo-banner">
            <h2>FIND YOUR PERFECT VEHICLE</h2>
            <p>Choose from premium cars and trucks at affordable rates worldwide.</p>
        </section>
        <section class="vehicle-gallery">
            <h2>Our Cars</h2>
            <div class="vehicle-list">
                <div class="vehicle-item">
                    <img src="AVANZA.jpg" alt="Car 1">
                    <h3>Toyota Avanza</h3>
                    <p>Price: Rp 500.000/day</p>
                </div>
                <div class="vehicle-item">
                    <img src="BRIO.jpg" alt="Car 2">
                    <h3>Honda Brio</h3>
                    <p>Price: Rp 400.000/day</p>
                </div>
                <div class="vehicle-item">
                    <img src="suzuki.jpg" alt="Car 3">
                    <h3>Suzuki Ertiga</h3>
                    <p>Price: Rp 450.000/day</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Rental Bendi Car</p>
    </footer>
</body>
</html>

