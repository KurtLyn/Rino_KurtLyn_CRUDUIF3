<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISLA CAFE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f9f3ea;
            color: #5c3e1e;
            line-height: 1.7;
            padding-top: 80px;
            padding-bottom: 80px; 
        }

        .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: px;
  
}
        
    header {
    background: linear-gradient(to right, #7e5a3c, #5c3e1e);
    color: white;
    padding: 15px 0;
    border-radius: 0 0 15px 15px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
}
        
       .header-content {
  display: flex;
  justify-content: flex-start; 
  align-items: flex-start;     
}

.logo {
  display: flex;
  align-items: center; 
  gap: 10px;           
}

.logo img {
  max-height: 60px;    
  height: auto;
  width: auto;
}

.logo h1 {
  font-size: 2rem;
  font-weight: 700;
  color: white;
  margin: 0;
}


        
    
        
        .main-content {
            margin-top: 30px;
        }
        
        .content-area {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        
        .content-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f0e6d8;
        }
        
        .content-header h2 {
            color: #7e5a3c;
        }
        
        .crud-buttons {
            display: flex;
            gap: 15px;
        }
        
        .crud-btn {
            padding: 12px 20px;
            background: #7e5a3c;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            color: white;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }
        
        .crud-btn:hover {
            background: #5c3e1e;
            transform: translateY(-3px);
        }
        
        .crud-btn i {
            font-size: 1.2rem;
        }
        
        .items-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 25px;
   margin-top: 20px; /* dati 20px lang */
   margin-bottom: 150px;
}

        .item-card {
    background: #f9f3ea;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s;
    
}

        
        .item-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }
        
        .item-img {
            height: 180px;
            background: linear-gradient(to right, #c09b78, #a57c5b);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 3rem;
            position: relative;
            overflow: hidden;
        }
        
        .item-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .item-details {
            padding: 20px;
        }
        
        .item-details h3 {
            color: #5c3e1e;
            margin-bottom: 10px;
            font-size: 1.3rem;
        }
        
        .item-details p {
            color: #7e5a3c;
            margin-bottom: 15px;
            font-size: 0.95rem;
            line-height: 1.5;
        }
        
        .item-price {
            font-weight: 700;
            color: #5c3e1e;
            font-size: 1.3rem;
            margin-bottom: 15px;
        }
        
        .item-status {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        .status-available {
            background-color: #e8f5e9;
            color: #2e7d32;
        }
        
        .status-unavailable {
            background-color: #ffebee;
            color: #c62828;
        }
        
        .item-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }
        
        .action-btn {
            padding: 10px 15px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            transition: all 0.2s;
        }
        
        .edit-btn {
            background: #e2d0b9;
            color: #5c3e1e;
        }
        
        .edit-btn:hover {
            background: #d4bfa4;
        }
        
        .delete-btn {
            background: #f44336;
            color: white;
        }
        
        .delete-btn:hover {
            background: #e53935;
        }
        
        .no-data {
            text-align: center;
            padding: 40px;
            color: #7e5a3c;
            font-style: italic;
            grid-column: 1 / -1;
        }
        
        .no-data i {
            font-size: 3rem;
            margin-bottom: 15px;
            display: block;
        }
    
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            opacity: 0;
            z-index: 2100;  
            transition: opacity 0.3s ease;
        }

        .modal.active {
            display: flex;
            opacity: 1;
        }

        .modal-content {
            background-color: white;
            border-radius: 15px;
            width: 90%;
            max-width: 500px;
            padding: 30px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
            transform: translateY(-50px);
            transition: transform 0.3s ease;
            max-height: 90vh;
            overflow-y: auto;
        }

        .modal.active .modal-content {
            transform: translateY(0);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f0e6d8;
        }

        .modal-header h2 {
            color: #7e5a3c;
        }

        .close-btn {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #7e5a3c;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #5c3e1e;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #e2d0b9;
            border-radius: 8px;
            font-size: 1rem;
            color: #5c3e1e;
            background-color: #f9f3ea;
        }

        .form-group input:focus, .form-group textarea:focus {
            outline: none;
            border-color: #7e5a3c;
            box-shadow: 0 0 0 2px rgba(126, 90, 60, 0.2);
        }

        .form-group textarea {
            min-height: 100px;
            resize: vertical;
        }

        .submit-btn {
            padding: 12px 20px;
            background: #7e5a3c;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            color: white;
            cursor: pointer;
            transition: all 0.3s;
            display: block;
            width: 100%;
        }

        .submit-btn:hover {
            background: #5c3e1e;
        }

        .image-preview {
            width: 100%;
            height: 150px;
            border: 2px dashed #e2d0b9;
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
            overflow: hidden;
        }

        .image-preview img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .image-preview span {
            color: #7e5a3c;
            font-style: italic;
        }
        
        @media (max-width: 768px) {
            .crud-buttons {
                flex-direction: column;
                width: 100%;
            }
            
            .content-header {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }
            
            .crud-btn {
                width: 100%;
            }
            
            .items-grid {
                grid-template-columns: 1fr;
            }
            
            .item-actions {
                flex-direction: column;
                gap: 10px;
            }
            
            .action-btn {
                width: 100%;
                justify-content: center;
            }
            
            .modal-content {
                width: 95%;
                padding: 20px;
            }
        }
        .background-img {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        
        .content {
            position: relative;
            z-index: 1;
            padding: 20px;
        }
        .item-price-status {
    display: flex;
    align-items: center;
    gap: 160px; 
    margin-bottom: 15px; 

    
}
    .slide-up-footer {
        text-align: center;
        padding: 30px 20px 20px;
        color: #5c3e1e;
        background-color: #f9f3ea;
        position: fixed;
        bottom: 0;
        width: 100%;
        z-index: 1000;
        box-shadow: 0 -2px 15px rgba(92, 62, 30, 0.1);
        transform: translateY(100%);
        transition: transform 0.5s ease-out;
    }
    .slide-up-footer.visible {
        transform: translateY(0);
    }
    .wavy-divider {
        position: absolute;
        top: -70px;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
    }

    .wavy-divider svg {
        position: relative;
        display: block;
        width: calc(100% + 1.3px);
        height: 70px;
        transform: rotate(180deg);
    }

    .shape-fill {
        fill: #f9f3ea;
    }

    .footer-content {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }

    .footer-text {
        text-align: left;
    }

    .cafe-name {
        font-size: 1.4rem;
        font-weight: bold;
        margin-bottom: 5px;
        color: #5c3e1e;
    }

    .tagline {
        font-size: 0.9rem;
        font-style: italic;
        margin-bottom: 5px;
        color: #7e5a3c;
    }

    .author {
        font-size: 0.9rem;
        color: #5c3e1e;
    }

    .social-icons {
        display: flex;
        gap: 15px;
    }

    .social-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background-color: #7e5a3c;
        color: white;
        border-radius: 50%;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .social-icon:hover {
        background-color: #5c3e1e;
        transform: translateY(-3px);
    }

    @media (max-width: 768px) {
        .footer-content {
            flex-direction: column;
            gap: 15px;
        }
        
        .footer-text {
            text-align: center;
        }
        
        .wavy-divider {
            top: -50px;
        }
        
        .wavy-divider svg {
            height: 50px;
        }
    }
    </style>
</head>
<body>
    <img src="/public/image/peace.gif" alt="Cafe Background" class="background-img">
   <header>
  <div class="container">
    <div class="header-content">
      <div class="logo">
        <img src="/public/image/cafelogo.png" alt="Isla Cafe Logo">
        <h1>ISLA CAFE</h1>
      </div>
    </div>
  </div>
</header>

    <div class="container">
        <div class="main-content">
            <div class="content-area">
                <div class="content-header">
                    <h2>MENU ITEMS</h2>
                    <div class="crud-buttons">
                        <button class="crud-btn" onclick="openCreateModal()">
                            <i class="fas fa-plus-circle"></i> Create New Item
                        </button>
                    </div>
                </div>

                <div class="items-grid">
                    <?php foreach($isla_cafe as $item): ?>
                    <div class="item-card">
                        <div class="item-img">
                            <?php if (!empty($item['image'])): ?>
                               <img src="/public/uploads/<?= $item['image'] ?>" alt="<?= $item['name'] ?>">


                            <?php else: ?>
                                <i class="fas fa-question"></i>
                            <?php endif; ?>
                        </div>
                        <div class="item-details">
                            <h3><?= $item['name'] ?></h3>
                            <p><?= $item['description'] ?></p>
                         

                            
                            <div class="item-price-status">
    <div class="item-price">₱<?= number_format($item['price'], 2) ?></div>
    <?php if (empty($item['deleted_at'])): ?>
        <span class="item-status status-available">Available</span>
    <?php else: ?>
        <span class="item-status status-unavailable">Unavailable</span>
    <?php endif; ?>
</div>

                            
                            <div class="item-actions">
                                <button class="action-btn edit-btn" onclick="openEditModal(<?= $item['id'] ?>, '<?= $item['name'] ?>', '<?= addslashes($item['description']) ?>', '<?= $item['price'] ?>', '<?= $item['image'] ?>')">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                                <?php if (empty($item['deleted_at'])): ?>
                                    <a href="<?= site_url('cafe/soft-delete/'. $item['id']) ?>" class="action-btn delete-btn">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                <?php else: ?>
                                    <a href="<?= site_url('cafe/restore/'. $item['id']) ?>" class="action-btn edit-btn">
                                        <i class="fas fa-undo"></i> Restore
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

<div class="modal" id="createModal">
  <div class="modal-content">
    <div class="modal-header">
      <h2>Create New Menu Item</h2>
      <button class="close-btn" onclick="closeCreateModal()">&times;</button>
    </div>

    <form action="<?= site_url('cafe/create') ?>"
          method="post" enctype="multipart/form-data">

      <div class="form-group">
        <label for="create_name">Name:</label>
        <input type="text" id="create_name" name="name" required>
      </div>

      <div class="form-group">
        <label for="create_description">Description:</label>
        <textarea id="create_description" name="description" required></textarea>
      </div>

      <div class="form-group">
        <label for="create_price">Price:</label>
        <input type="number" id="create_price" name="price" step="0.01" min="0" required>
      </div>

      <div class="form-group">
        <label for="create_image">Image:</label>
        <input type="file" id="create_image" name="image" accept="image/*" onchange="previewCreateImage(this)">
        <div class="image-preview" id="createImagePreview">
          <span>No image selected</span>
        </div>
      </div>

      <button type="submit" class="submit-btn">Create Item</button>
    </form>
  </div>
</div>

    <div class="modal" id="editModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Update Menu Item</h2>
                <button class="close-btn" onclick="closeEditModal()">&times;</button>
            </div>
            <form id="editForm" method="post" enctype="multipart/form-data">
                <input type="hidden" id="edit_id" name="id">
                <div class="form-group">
                    <label for="edit_name">Name:</label>
                    <input type="text" id="edit_name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="edit_description">Description:</label>
                    <textarea id="edit_description" name="description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="edit_price">Price:</label>
                    <input type="number" id="edit_price" name="price" step="0.01" min="0" required>
                </div>
                <div class="form-group">
                    <label for="edit_image">Image:</label>
                    <input type="file" id="edit_image" name="image" accept="image/*" onchange="previewEditImage(this)">
                    <div class="image-preview" id="editImagePreview">
                        <span>No image selected</span>
                    </div>
                </div>
                <button type="submit" class="submit-btn">Update Item</button>
            </form>
        </div>
    </div>

     
<footer class="slide-up-footer">
    <div class="wavy-divider">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
        </svg>
    </div>
    <div class="footer-content">
        <div class="footer-text">
            <p class="cafe-name">ISLA CAFE</p>
            <p class="tagline">A CRUD with GUI Activity</p>
            <p class="author">KURT LYN RIÑO 3-F3</p>
        </div>
        
        <div class="social-icons">
            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
</footer>


    <script>
        function openCreateModal() {
            document.getElementById('createModal').classList.add('active');
            document.getElementById('create_name').value = '';
            document.getElementById('create_description').value = '';
            document.getElementById('create_price').value = '';
            document.getElementById('create_image').value = '';
            document.getElementById('createImagePreview').innerHTML = '<span>No image selected</span>';
        }

        function closeCreateModal() {
            document.getElementById('createModal').classList.remove('active');
        }

        function openEditModal(id, name, description, price, image) {
            document.getElementById('editModal').classList.add('active');
            document.getElementById('edit_id').value = id;
            document.getElementById('edit_name').value = name;
            document.getElementById('edit_description').value = description;
            document.getElementById('edit_price').value = price;
            document.getElementById('editForm').action = `<?= site_url('cafe/update/') ?>${id}`;

            const preview = document.getElementById('editImagePreview');
            if (image) {
                preview.innerHTML = `<img src="<?= base_url('uploads/') ?>${image}" alt="${name}">`;
            } else {
                preview.innerHTML = '<span>No image available</span>';
            }
        }

        function closeEditModal() {
            document.getElementById('editModal').classList.remove('active');
        }

        function previewCreateImage(input) {
            const preview = document.getElementById('createImagePreview');
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.innerHTML = `<img src="${e.target.result}" alt="Preview">`;
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                preview.innerHTML = '<span>No image selected</span>';
            }
        }

        function previewEditImage(input) {
            const preview = document.getElementById('editImagePreview');
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.innerHTML = `<img src="${e.target.result}" alt="Preview">`;
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                const image = document.getElementById('editImagePreview').querySelector('img');
                if (image) {
                    preview.innerHTML = image.outerHTML;
                } else {
                    preview.innerHTML = '<span>No image available</span>';
                }
            }
        }

        document.querySelectorAll('.modal').forEach(modal => {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    this.classList.remove('active');
                }
            });
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                document.querySelectorAll('.modal').forEach(modal => {
                    modal.classList.remove('active');
                });
            }
        });
function checkScroll() {
    const footer = document.querySelector('.slide-up-footer');
    const scrollPosition = window.scrollY || window.pageYOffset;
    const documentHeight = document.documentElement.scrollHeight;
    const windowHeight = window.innerHeight;
    
    if (documentHeight - scrollPosition - windowHeight < 150) {
        footer.classList.add('visible');
    } else {
        footer.classList.remove('visible');
    }
}
window.addEventListener('scroll', checkScroll);
window.addEventListener('load', checkScroll);
    </script>
</body>
</html>