<!DOCTYPE html>
<html>
<head>
    <title>Real Estate Listings</title>
</head>
<body>

    <h1>Real Estate Properties for Lease</h1>

    <?php if (!empty($properties['items'])): ?>
        <ul>
            <?php foreach ($properties['items'] as $property): ?>
                <li>
                    <h2><?php echo $property['displayAddress']; ?></h2>
                    <p><strong>Type:</strong> <?php echo $property['type']['name']; ?></p>
                    <p><strong>Bedrooms:</strong> <?php echo $property['bed']; ?></p>
                    <p><strong>Bathrooms:</strong> <?php echo $property['bath']; ?></p>
                    <p><strong>Garage:</strong> <?php echo $property['garages']; ?></p>
                    <p><strong>Floor Area:</strong> <?php echo $property['floorArea']['value'] . ' ' . $property['floorArea']['units']; ?></p>

                    <?php if (!empty($property['photos'])): ?>
    <h3>Images:</h3>
    <div style="display: flex; gap: 10px;">
        <?php foreach ($property['photos'] as $photo): ?>
            <img src="<?php echo $photo['url']; ?>" alt="Property Image" width="150" height="100">
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <p>No images available for this property.</p>
<?php endif; ?>

                    <p><strong>Contact:</strong> <?php echo $property['contactStaff'][0]['firstName'] . ' ' . $property['contactStaff'][0]['lastName']; ?></p>
                    <p><strong>Email:</strong> <?php echo $property['contactStaff'][0]['email']; ?></p>
                    <p><strong>Phone:</strong> <?php echo $property['contactStaff'][0]['phoneNumbers'][0]['number']; ?></p>

                    <!-- Display more data -->
                    <p><strong>Geolocation:</strong> Latitude <?php echo $property['geolocation']['latitude']; ?>, Longitude <?php echo $property['geolocation']['longitude']; ?></p>
                    <p><strong>Status:</strong> <?php echo $property['status']; ?></p>
                    <p><strong>Account:</strong> <?php echo $property['account']['name']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No properties available.</p>
    <?php endif; ?>

</body>
</html>
