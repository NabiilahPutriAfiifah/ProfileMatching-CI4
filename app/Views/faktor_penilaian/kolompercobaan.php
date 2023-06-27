<table id="example1" class="table table-bordered table-striped">
    <thead>
        <th>#</th>
        <th>Nama Aspek</th>
        <?php foreach(esc($faktor_penilaian) as $pr) : ?>
        <th><?= esc($pr->nama_kriteria) ?></th>
        <?php endforeach; ?>
    </thead>
    <tbody>
        <?php   if(count(esc($faktor_penilaian)) > 0): 
                                $i = 1;
                        ?>
        <?php foreach(esc($faktor_penilaian) as $pr) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= esc($pr->nama_aspek) ?></td>
            <td><?= esc($pr->nama_kriteria) ?></td>
            <td><?= esc($pr->faktor) ?></td>
            <td><?= esc($pr->nilai) ?></td>
            <td>
                <div class="btn-group btn-group-sm">
                    <a href="<?= base_url('faktor_penilaian/update_faktor_penilaian/'.$pr->id) ?>"
                        class="btn text-light rounded mx-1" title="Edit Data" style="background-color: #445199;">
                        <i class="fa fa-edit"></i> Edit Data
                    </a>
                    <a href="<?= base_url('faktor_penilaian/delete_faktor_penilaian/'.$pr->id) ?>"
                        onclick="if(confirm('Are you sure to delete this data?') === false) event.preventDefault()"
                        class="btn text-light rounded mx-1" title="Delete Data" style="background-color: #8080ed;">
                        <i class="fa fa-trash"></i> Delete Data
                    </a>
                </div>

            </td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>