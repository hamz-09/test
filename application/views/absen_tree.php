<?php if (!empty($karyawan)): ?>
    <?php foreach ($karyawan as $row): ?>
        <?php 
            $children = $this->Karyawan_model->get_children($row['id']);
        ?>

        <div class="branch">
            <div class="node" 
                 id="node-<?php echo $row['id']; ?>" 
                 onclick="toggleNode('<?php echo $row['id']; ?>')">

                <div id="foto-<?php echo $row['id']; ?>" class="node-foto-container">
                    <?php if (!empty($row['foto'])): ?>
                        <img src="<?php echo base_url('uploads/karyawan/' . $row['foto']); ?>"
                             alt="Foto <?php echo htmlspecialchars($row['nama']); ?>"
                             class="node-foto"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                        <div class="node-foto-default" style="display:none;">No Photo</div>
                    <?php else: ?>
                        <div class="node-foto-default">No Photo</div>
                    <?php endif; ?>
                </div>

                <div class="node-name"><?php echo htmlspecialchars($row['nama']); ?></div>
                <div class="node-jabatan"><?php echo htmlspecialchars($row['jabatan']); ?></div>
                <div class="node-status" id="status-<?php echo $row['id']; ?>">
                    <?php echo ucfirst($row['status_absen']); ?>
                </div>

                <button class="edit-btn" 
                        onclick="editKaryawan('<?php echo $row['id']; ?>'); event.stopPropagation();">
                    Edit
                </button>
                <button class="delete-btn" 
                        onclick="deleteKaryawan('<?php echo $row['id']; ?>'); event.stopPropagation();">
                    Del
                </button>
            </div>

            <?php if (!empty($children)): ?>
                <div class="sub-branch">
                    <?php $this->load->view('absen_tree', ['karyawan' => $children]); ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>