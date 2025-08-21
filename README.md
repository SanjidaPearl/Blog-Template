
### 1. Master Layout and Components
- Created a single `layout.blade.php` as the master template.
- Split reusable UI elements into components: `header`, `footer`, `errors`, and `success` messages.
- All pages extend the master layout for consistent design and easy maintenance.

### 2. Category Management
- Built a form to add new blog categories with fields: **name** and **slug**.
- Applied **validation** rules: `required` for name, `unique` for slug.
- Displayed error messages clearly when validation fails.
- Listed all categories in the admin panel with **pagination**.

### 3. Post Management
- Created a form to add new blog posts with fields: **title, content, and category selection**.
- Implemented a **relationship**: a category has many posts (`Category` → `Post`).
- Added **validation** to ensure all fields are filled correctly before submission.
- Displayed error messages on the form when validation fails.
- Listed all posts in the admin panel with **pagination**.

### 4. Frontend Display
- Showed all categories and their respective posts.
- Displayed post **title**, **content**, and **category name**.
- Used Blade components and responsive Tailwind CSS for a clean, user-friendly UI.

## Features
- Manage categories and posts from the admin panel.
- Input validation with error feedback.
- Paginated lists for easy navigation.
- Modern responsive design using Tailwind CSS.
- Reusable Blade components for clean structure.
