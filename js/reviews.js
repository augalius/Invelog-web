document.addEventListener("DOMContentLoaded", () => {
    const reviewsContainer = document.getElementById("reviews-container");
    const averageRatingContainer = document.getElementById("average-rating");
    const allReviewsContainer = document.getElementById("all-reviews");
    const ratingFilter = document.getElementById("star-filter");

    let reviews = [];

    // Fetch reviews from reviews.json
    fetch("reviews.json")
        .then(response => response.json())
        .then(data => {
            reviews = data;
            if (reviews.length > 0) {

                // Calculate and display the average rating
                const averageRating = calculateAverageRating(reviews);
                displayAverageRating(averageRating);

                renderReviews("all");
                
                // Filter reviews by stars
                if (ratingFilter) {
                    ratingFilter.addEventListener("change", e => {
                        renderReviews(e.target.value);
                    });
                }

                // random 5-star review
                const fiveStarReviews = reviews.filter(review => review.stars === 5);
                let i = Math.floor(Math.random() * fiveStarReviews.length);
                if (fiveStarReviews.length > 0) {
                    displayReview(fiveStarReviews[i]);
                    setInterval(() => {
                        i = Math.floor(Math.random() * fiveStarReviews.length);
                        displayReview(fiveStarReviews[i]);
                    }, 5000);
                } else {
                    reviewsContainer.innerHTML = "<p>No 5-star reviews available.</p>";
                }
            } else {
                reviewsContainer.innerHTML = "<p>No reviews available.</p>";
            }
        })
        .catch(error => {
            console.error("Error fetching reviews:", error);
            reviewsContainer.innerHTML = "<p>Failed to load reviews.</p>";
        });

    // Function to display random 5-star review
    function displayReview(review) {
        reviewsContainer.innerHTML = `
            <div class="review">
                <h3>${review.review_title}</h3>
                <p>${review.review_content}</p>
                <p><strong>Rating:</strong> ${review.stars} stars</p>
            </div>
        `;
    }

    // Function to calculate the average rating
    function calculateAverageRating(reviews) {
        const totalStars = reviews.reduce((sum, review) => sum + review.stars, 0);
        return (totalStars / reviews.length).toFixed(2);
    }

    // Function to display average rating
    function displayAverageRating(averageRating) {
        averageRatingContainer.innerHTML = `
            <h2>Average Rating: ${averageRating} stars</h2>
        `;
    }

    // Function to display all reviews filtered by stars
    function renderReviews(rating) {
        const filtered = rating === "all" ? reviews : reviews.filter(r => r.stars == rating);
        allReviewsContainer.innerHTML = filtered.map(r => `
            <div class="review-box">
            <h3>${r.review_title}</h3>
            <p>${r.review_content}</p>
            <p><strong>Rating:</strong> ${r.stars} stars</p>
            </div>
            <hr>
        `)
        .join('');
    }
});
