<?php
    $schools = [
        'Capital' => [],
        'Grande São Paulo' => [],
        'Interior' => []
    ];

    foreach ($schoolsData as $row) {
        $region = ($row['id_region'] == 1) ? 'Capital' : (($row['id_region'] == 2) ? 'Grande São Paulo' : 'Interior');
        $schools[$region][$row['id']] = $row['school'];
    }
?>

<div class="col-md-12">
    <h3 class="mt-5">Unidades</h3>
    <hr>
    
    <?php foreach ($schools as $region => $units): ?>
        <h5 class="mt-5"><?php echo $region; ?></h5>
        <?php foreach ($units as $key => $name): ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="school_<?php echo $key; ?>" name="schools[]" value="<?php echo $key; ?>">
                <label class="form-check-label" for="school_<?php echo $key; ?>"><?php echo $name; ?></label>
            </div>
        <?php endforeach; ?>
        <hr class="my-3">
    <?php endforeach; ?>
</div>
