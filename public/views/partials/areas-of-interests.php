<?php foreach ($areasOfInterests as $area): ?>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="<?php echo $area['id']; ?>" value="<?php echo $area['id']; ?>">
        <label class="form-check-label" for="<?php echo $area['id']; ?>"><?php echo htmlspecialchars($area['name']); ?></label>
    </div>
<?php endforeach; ?>