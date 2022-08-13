<template>
  <div id="app">
    <nav class="navbar navbar-expand navbar-dark bg-dark">
      <a href="#" class="navbar-brand">Simple Siakad</a>
      <div class="navbar-nav mr-auto">
        <li class="nav-item">
          <a href="/" class="nav-link">Dosen</a>
        </li>
        <li class="nav-item">
          <a href="/matakuliah-list" class="nav-link">Mata Kuliah</a>
        </li>
        <li class="nav-item">
          <a href="/dosen_matakuliah-list" class="nav-link">Dosen - Mata Kuliah</a>
        </li>
        <li class="nav-item">
          <a href="/login" class="nav-link">Login</a>
        </li>
      </div>
    </nav>

    <div class="container mt-3">
      <router-view />
    </div>
  </div>
</template>

<script>
export default {
  name: "app"
};
</script>
