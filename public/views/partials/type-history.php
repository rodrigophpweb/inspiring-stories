<?php foreach ($typeHistory as $type): ?>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="area-<?php echo $type['id']; ?>" value="<?php echo htmlspecialchars($type['type_history']); ?>">
        <label class="form-check-label" for="area-<?php echo $type['id']; ?>"><?php echo htmlspecialchars($type['type_history']); ?></label>
    </div>
<?php endforeach; ?>
<!--
ChatGPT, preciso de sua ajuda com PHP, especificamente com PDO para um formulário para adicionar e atualizar dados.

Eu tenho uma tabela chamada history, essa tabela se relaciona com outras tabelas como:

- history_areas_interests
- history_copyright
- history_midia
- history_school
- history_school_level
- history_social_media
- history_type_history

Você precisa que eu envie o código html gerado via PHP? Preciso que também eu envie um arquivo sql?
-->