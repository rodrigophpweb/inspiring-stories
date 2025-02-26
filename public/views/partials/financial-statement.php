<section class="financialStatement paddingContent">
    <h2>Demonstração Contábeis</h2>
    <h2><?=get_field('financialStatementTitle')?></h2>
    <p><?=get_field('financialStatementDescription')?></p>
    <div class="pdfs">
        <?php if( have_rows('pdfs') ): ?>
            <?php while( have_rows('pdfs') ): the_row(); ?>            
                <div class="pdf">
                <?php
                    $file = get_field('file');
                    if( $file ): ?>
                        <a href="<?php echo $file['url']; ?>" download class="year"><?php echo $file['filename']; ?><br>PDF</a>
                    <?php 
                endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

