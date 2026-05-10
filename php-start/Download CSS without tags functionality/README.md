# Tailwind CSS Setup (No Preflight)

## 📁 Project Structure

```
day_43-tailwind-setup/
├── form.html              # Your main HTML file
├── styles.css             # Input CSS file (Tailwind imports)
├── output.css             # Generated CSS file (link this in HTML)
├── tailwind.config.js     # Tailwind configuration (preflight disabled)
├── package.json           # Node.js dependencies
├── node_modules/          # Installed packages (don't edit)
└── README.md              # This file
```

## 📄 File Descriptions

### `form.html`
Your HTML file with the link to compiled CSS:
```html
<link rel="stylesheet" href="output.css">
```
**Note:** The `output.css` is auto-generated. Don't edit it manually.

### `styles.css`
Input CSS that Tailwind processes. Contains:
```css
@import "tailwindcss/theme.css" layer(theme);
@import "tailwindcss/utilities.css" layer(utilities);
```
**Why no preflight?** This excludes browser reset styles, keeping your default HTML styling intact.

### `output.css`
Auto-generated compiled CSS file. Gets updated whenever you save `styles.css` or change HTML classes.

### `tailwind.config.js`
Tailwind configuration that disables preflight:
```javascript
module.exports = {
  corePlugins: {
    preflight: false,
  },
}
```

### `package.json`
Manages npm dependencies (Tailwind CSS and CLI).

## 🚀 How to Use (For Future Projects)

### Option 1: Copy & Paste (Fastest)
1. **Copy this entire folder** to your new project
2. **Remove `output.css`** (it will be regenerated)
3. **Update `form.html`** with your HTML content
4. **Run the build command:**
   ```powershell
   npx @tailwindcss/cli -i styles.css -o output.css --watch
   ```
5. **Add Tailwind classes** to your HTML elements
6. Done! Your styles update automatically

### Option 2: Manual Setup
If you don't have this folder template:
```powershell
# Install dependencies
npm install -D tailwindcss @tailwindcss/cli

# Create styles.css with the imports above

# Run the build
npx @tailwindcss/cli -i styles.css -o output.css --watch
```

## ✨ Using Tailwind Classes

Your HTML keeps default browser styles but accepts Tailwind utilities:

```html
<!-- Without class: default browser style -->
<h2>Product Form</h2>

<!-- With Tailwind classes: custom styling -->
<h2 class="text-2xl font-bold text-blue-600 mb-4">Product Form</h2>

<!-- Form inputs keep default style but can be enhanced -->
<input type="text" class="border-2 border-gray-300 p-2 rounded">
```

## 🔧 Key Benefits

✅ **No global resets** - HTML keeps default styling  
✅ **Only use what you need** - Add Tailwind classes as needed  
✅ **Auto-build** - Changes detected and compiled instantly  
✅ **Reusable** - Copy folder for new projects  
✅ **Lightweight** - Builds only used classes

## 📝 Quick Commands

```powershell
# Start watch mode (auto-rebuild on changes)
npx @tailwindcss/cli -i styles.css -o output.css --watch

# Build once (one-time compilation)
npx @tailwindcss/cli -i styles.css -o output.css

# Stop watch mode
Press Ctrl + C in terminal
```

## ⚠️ Important

- Always keep `node_modules` folder (contains all dependencies)
- Keep `package.json` and `package-lock.json` together
- Link `output.css` in your HTML (not `styles.css`)
- Don't edit `output.css` manually - it regenerates automatically
