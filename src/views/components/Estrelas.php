<div class="star-rating">
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo '<span class="star" data-rating="' . $i . '">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="star-svg">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
            </svg>
        </span>';
    }
    ?>
</div>

<style>
    .star-rating {
        display: inline-flex;
        gap: 5px;
        width: 100%;
        justify-content: flex-end;
    }

    .star {
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .star-svg {
        stroke: #ccc;
        stroke-width: 2;
        fill: none;
    }

    .star:hover .star-svg,
    .star.active .star-svg {
        stroke: #660BAD;
        fill: #660BAD;
    }

    .star:hover {
        transform: scale(1.1);
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const stars = document.querySelectorAll('.star');
    
    stars.forEach(star => {
        star.addEventListener('click', function() {
            const rating = this.getAttribute('data-rating');
            
            stars.forEach(s => {
                if (s.getAttribute('data-rating') <= rating) {
                    s.classList.add('active');
                } else {
                    s.classList.remove('active');
                }
            });
        });
    });
});
</script>