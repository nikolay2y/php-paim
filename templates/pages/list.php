<div>
    <div class="message">
        <?php
        if (!empty($params['before'])) {

            switch ($params['before']) {
                case 'created':
                    echo 'Notatka zostala utworzona';
                    break;
            }
        }
        ?>
    </div>
    <b>
        <?php
        echo $params['resultlist'] ?? ""; ?>
    </b>
    <h3>Lista notatek</h3>
</div>