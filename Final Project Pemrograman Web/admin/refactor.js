const fs = require('fs');
const path = require('path');

const adminDir = path.join(__dirname);
const dashboardHtml = fs.readFileSync(path.join(adminDir, 'dashboard-admin.html'), 'utf8');

// Extract the base shell from dashboard-admin.html
// Head and Body start
const headMatch = dashboardHtml.match(/<!DOCTYPE html>[\s\S]*?<body class="bg-base font-sans text-t1 flex min-h-screen">/)[0];

// Sidebar
const sidebarMatch = dashboardHtml.match(/<aside class="sidebar-fixed[\s\S]*?<\/aside>/)[0];

// Footer and script
const footerMatch = dashboardHtml.match(/<footer[\s\S]*?<\/html>/)[0];

const filesToRefactor = [
  'warga.html',
  'tamu.html',
  'petugas.html',
  'pengumuman.html',
  'pengumuman-buat.html',
  'pengaturan.html',
  'lingkungan.html',
  'laporan.html'
];

// Helper to set active class in sidebar
function getSidebarFor(pageName) {
  let sb = sidebarMatch;
  // remove active from dashboard
  sb = sb.replace(/<a class="sb-item active !bg-blue-600\/10 !text-blue-400 !border-r-4 !border-blue-500 px-5 py-2\.5 flex items-center gap-3 cursor-pointer">/,
                  '<a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2.5 flex items-center gap-3 cursor-pointer transition-colors" onclick="go(\'dashboard-admin\')">');
  
  // Try to find the target link and make it active.
  // The pages use 'go(\'name\')' or similar. 
  // Let's do a simple replace if we find it.
  const regex = new RegExp(`<a class="sb-item text-slate-400 hover:text-white hover:bg-slate-800 px-5 py-2\\.5([^>]+)onclick="go\\('${pageName}'\\)"`);
  const replacement = `<a class="sb-item active !bg-blue-600/10 !text-blue-400 !border-r-4 !border-blue-500 px-5 py-2.5$1onclick="go('${pageName}')"`;
  
  if (sb.match(regex)) {
    sb = sb.replace(regex, replacement);
  }
  return sb;
}

// Function to process each file
function processFile(fileName) {
  const filePath = path.join(adminDir, fileName);
  if (!fs.existsSync(filePath)) return;
  
  let content = fs.readFileSync(filePath, 'utf8');
  
  // We need to extract the specific parts of the old file: title, breadcrumb/header, and content.
  // This might require manual mapping for the inner content, but let's try to extract `<div class="content">`
  
  // If we can't fully automate the inner Tailwind conversion, we can at least automate the shell,
  // and for the inner content we can do a basic replacement of .card, .field, etc. with Tailwind classes.
}

console.log('Script initialized, but manual mapping is better for complex inner content.');
