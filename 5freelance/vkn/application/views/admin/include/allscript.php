<script src="<?=base_url() ?>media/admin/js/app.min.js" ></script>
<script src="<?=base_url() ?>media/admin/plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="<?=base_url() ?>media/admin/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="<?=base_url() ?>media/admin/js/demo/form-plugins.demo.js"></script>
<script src="<?=base_url() ?>media/admin/plugins/summernote/dist/summernote.min.js" ></script>
<script src="<?=base_url() ?>media/admin/plugins/summernote/dist/summernote-bs4.min.js" ></script>
<script src="<?=base_url() ?>media/admin/js/demo/form-summernote.demo.js" ></script>
<script src="<?=base_url() ?>media/admin/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="<?=base_url() ?>media/admin/plugins/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="<?=base_url() ?>media/admin/plugins/bootstrap-3-typeahead/bootstrap3-typeahead.js"></script>
<script src="<?=base_url() ?>media/admin/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="<?=base_url() ?>media/admin/plugins/bootstrap-slider/dist/bootstrap-slider.min.js"></script>
<script src="<?php echo base_url(); ?>media/admin/js/sweetalert2@11.js" ></script>
<script src="//cdn.ckeditor.com/4.19.0/full/ckeditor.js"></script>
<style>
  .cke_notifications_area {
      display: none !important;
  }
</style>

  <?php if(!empty($this->session->flashdata('message'))){ ?>
  <script>
    $(document).ready(function() {
      var message = '<?php echo $this->session->flashdata('message'); ?>';
      showNotification(message);
      setTimeout(function() 
      {
        $('#app-notification-container').removeClass('app-notification-container');
      }, 3000);
    });
  </script>
<?php } ?>




<script>
/*--- single click to view & Upload Image---*/
      $('#image-input').change(function() {
        var file = this.files[0];
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#image-preview').attr('src', e.target.result);
          $('#image-preview').show(); // Show the image preview
        };
        reader.readAsDataURL(file);
      });

/* multiple image upload and view*/

      $('#multi-image-input').on('change', function () {
          var files = this.files;
          var newImagePreviews = $('#new-image-previews');
          newImagePreviews.html('');
          $.each(files, function (i, file) {
              var reader = new FileReader();
              reader.onload = function (e) {
                  newImagePreviews.append(`
                      <div class="image-preview new-image" style="display: grid; text-align: center;">
                          <img src="${e.target.result}" alt="Image Preview" width="75px">
                          <span class="remove-image">Remove</span>
                      </div>
                  `);
              };
              reader.readAsDataURL(file);
          });
      });

      // Remove image preview on click
      $(document).on('click', '.remove-image', function () {
          $(this).closest('.image-preview').remove();
      });



/*alert messgage function  */
      function showNotification(message) {
        $.notification({
          title: 'Message',
          content: message,
          icon: 'fa fa-inbox',
          iconClass: 'bg-gradient-blue-indigo text-white'
        });
      }



/*search menu*/
      document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('menuSearch');
    const allMenuItems = [];
    
    // Collect all menu items (main and sub)
    document.querySelectorAll('.nav a').forEach(menuItem => {
        const text = menuItem.textContent.trim();
        const url = menuItem.getAttribute('href');
        const liElement = menuItem.closest('li');
        const isSubmenuItem = liElement.closest('.nav-submenu');
        
        if(text && text !== 'Logout') {
            allMenuItems.push({
                element: liElement,
                text: text.toLowerCase(),
                originalText: text,
                url: url,
                isSubmenuItem: !!isSubmenuItem,
                parentMenu: isSubmenuItem ? liElement.closest('.has-sub') : null
            });
        }
    });
    
    // Store original display states
    const originalDisplayStates = new Map();
    document.querySelectorAll('.nav > li').forEach(li => {
        originalDisplayStates.set(li, li.style.display);
    });
    
    // Search function
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase().trim();
        const resultsContainer = this.parentElement.querySelector('.search-results');
        
        // Clear previous results
        resultsContainer.style.display = 'none';
        resultsContainer.innerHTML = '';
        
        if(searchTerm.length < 1) {
            // Reset to original state when search is empty
            resetMenu();
            return;
        }
        
        // Filter matching items
        const matches = allMenuItems.filter(item => 
            item.text.includes(searchTerm)
        );
        
        if(matches.length > 0) {
            // First, reset menu to show everything
            resetMenu();
            
            // Highlight matches and keep them visible
            matches.forEach(item => {
                // If it's a submenu item, open its parent
                if(item.isSubmenuItem && item.parentMenu) {
                    item.parentMenu.classList.add('open');
                    const submenu = item.parentMenu.querySelector('.nav-submenu');
                    if(submenu) {
                        submenu.style.display = 'block';
                    }
                }
                
                // Highlight the matching text
                const textElement = item.element.querySelector('.nav-text');
                if(textElement) {
                    const regex = new RegExp(`(${searchTerm})`, 'gi');
                    textElement.innerHTML = item.originalText.replace(regex, 
                        '<span class="text-warning">$1</span>');
                }
                
                // Add a visual indicator
                item.element.classList.add('search-match');
            });
            
            // Hide non-matching main menu items
            document.querySelectorAll('.has-sub').forEach(menu => {
                const hasVisibleSubItems = menu.querySelectorAll('.nav-submenu .search-match').length > 0;
                const menuText = menu.querySelector('.nav-text').textContent.toLowerCase();
                
                if(!menuText.includes(searchTerm) && !hasVisibleSubItems) {
                    menu.style.display = 'none';
                }
            });
            
            // Also hide non-matching single items
            document.querySelectorAll('.nav > li:not(.has-sub):not(.nav-profile):not(.nav-divider):not(.nav-header)').forEach(item => {
                if(!item.classList.contains('search-match')) {
                    item.style.display = 'none';
                }
            });
            
            // Show results in dropdown for quick navigation
            showQuickResults(matches, searchTerm, resultsContainer);
            
        } else {
            // No matches found
            hideAllMenu();
            resultsContainer.innerHTML = '<div class="no-results">No matches found</div>';
            resultsContainer.style.display = 'block';
        }
    });
    
    // Show quick results in dropdown
    function showQuickResults(matches, searchTerm, container) {
        container.innerHTML = '';
        
        // Group by parent menu
        const grouped = {};
        matches.forEach(item => {
            const parentTitle = item.parentMenu ? 
                item.parentMenu.querySelector('.nav-text').textContent : 
                'Main Menu';
            
            if(!grouped[parentTitle]) {
                grouped[parentTitle] = [];
            }
            grouped[parentTitle].push(item);
        });
        
        // Create dropdown items
        Object.keys(grouped).forEach(parentTitle => {
            const groupHeader = document.createElement('div');
            groupHeader.className = 'search-group-header';
            groupHeader.textContent = parentTitle;
            container.appendChild(groupHeader);
            
            grouped[parentTitle].forEach(item => {
                const div = document.createElement('div');
                div.className = 'search-result-item';
                div.innerHTML = `
                    <a href="${item.url}" class="d-flex align-items-center">
                        <i class="fa fa-arrow-right me-2"></i>
                        <span>${highlightText(item.originalText, searchTerm)}</span>
                    </a>
                `;
                container.appendChild(div);
            });
        });
        
        container.style.display = 'block';
    }
    
    // Highlight text function
    function highlightText(text, term) {
        const regex = new RegExp(`(${term})`, 'gi');
        return text.replace(regex, '<span class="text-danger fw-bold">$1</span>');
    }
    
    // Reset menu to original state
    function resetMenu() {
        // Remove all search classes
        document.querySelectorAll('.search-match').forEach(item => {
            item.classList.remove('search-match');
        });
        
        // Reset text highlighting
        document.querySelectorAll('.nav-text').forEach(text => {
            const original = text.textContent || text.innerText;
            text.innerHTML = original;
        });
        
        // Restore original display states
        document.querySelectorAll('.nav > li').forEach(li => {
            li.style.display = originalDisplayStates.get(li) || 'block';
        });
        
        // Reset submenus based on click state
        document.querySelectorAll('.has-sub').forEach(sub => {
            if(!sub.classList.contains('open')) {
                const submenu = sub.querySelector('.nav-submenu');
                if(submenu) submenu.style.display = 'none';
            }
        });
    }
    
    // Hide all menu items except search
    function hideAllMenu() {
        document.querySelectorAll('.nav > li').forEach(li => {
            if(!li.classList.contains('nav-profile') && 
               !li.classList.contains('nav-divider') && 
               !li.classList.contains('nav-header')) {
                li.style.display = 'none';
            }
        });
    }
    
    // Clear search on escape key
    searchInput.addEventListener('keydown', function(e) {
        if(e.key === 'Escape') {
            this.value = '';
            resetMenu();
            this.blur();
        }
    });
    
    // Close results when clicking outside
    document.addEventListener('click', function(e) {
        if(!e.target.closest('.navbar-form')) {
            const resultsContainer = searchInput.parentElement.querySelector('.search-results');
            resultsContainer.style.display = 'none';
        }
    });
    
    // Click on search result
    document.addEventListener('click', function(e) {
        if(e.target.closest('.search-result-item a')) {
            const resultsContainer = searchInput.parentElement.querySelector('.search-results');
            resultsContainer.style.display = 'none';
            searchInput.value = '';
            resetMenu();
        }
    });
});
</script>