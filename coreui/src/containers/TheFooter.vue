<template>
  <CFooter :fixed="false">
    <div>
      <a href="#" target="_blank">Md.Rafiuzzaman Khan</a>
      <span class="ml-1">&copy; {{new Date().getFullYear()}} </span>
    </div>
    <div class="ml-auto">
      <span class="mr-1">Powered by</span>
      Vue and Laravel
    </div>
  </CFooter>
</template>

<script>
export default {
  name: 'TheFooter'
}
</script>
