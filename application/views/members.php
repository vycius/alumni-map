<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<section id="section-members">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Alumnai</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <table class="table table-hover" id="alumnitable">
                    <thead>
                    <tr>
                        <th>Alumnas</th>
                        <th>Gyvenamoji vieta</th>
                        <th>Laida</th>
                        <th>Darbas</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($members as $member): ?>
                        <?php if (strlen($member["lastNameG"]) > 1)
                            $member["lastName"] .= "-" . $member["lastNameG"];
                        ?>
                        <tr>
                            <td><?php echo $member["name"] . ' ' . $member["lastName"]; ?></td>
                            <td><?php echo $member["city"] . ' ' . $member["country"]; ?></td>
                            <td><?php echo $member["laida"]; ?></td>
                            <td><?php echo $member["work"]; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>