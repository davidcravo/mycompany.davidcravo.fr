<?php 
    include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'init.php';
    require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'head.php'; 
    require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'header.php';
    
    $file_addresses = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'addresses.csv';
    $addresses = get_csv_files($file_addresses, 'address');

    $file_time_slots = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'time_slots.csv';
    $time_slots = get_csv_files($file_time_slots, 'time_slot');

    date_default_timezone_set('Europe/Paris');
    $days = Day::getDayKeysValues();
?>

<main class="main_find_us">

    <div class="slots_addresses">
        <img class="building" src="/assets/images/find_us/my_company_building.jpeg" alt="Photo du batiment">
        <div class="right">
            <div class="opening_hours">
                <h2>Horaires d'ouverture :</h2>
                <ul>
                    <?php
                        foreach($time_slots as $value){
                            $time_slot = new Time_slot($value['day_of_the_week'], $value['am_start'], $value['am_end'], $value['pm_start'], $value['pm_end']);
                            $selected = (strtolower($time_slot->get_day_of_the_week()) === strtolower($days[date('l')]) ? 'selected' : '');
                            echo $time_slot->time_slot_html($selected);
                        }
                    ?>
                </ul>
            </div>
            <div class="address">
                <h2>Adresses :</h2>
                <?php 
                    foreach($addresses as $address){
                        $address_object = new Address($address['street_address'], $address['postal_code'], $address['city'], $address['country']);
                        echo $address_object->address_html();
                    } 
                ?>
            </div>
        </div>            
        
    </div>  

</main>

<?php
    require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'footer.php';
?>

    
