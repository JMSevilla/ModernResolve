<el-dropdown class="dropdownmenu">
    <span class="el-dropdown-link">
        Select Class<i class="el-icon-arrow-down el-icon--right"></i>
    </span>
        <el-dropdown-menu slot="dropdown" class="dropdownmenu">
        <el-dropdown-item>Action 1</el-dropdown-item>
        <el-dropdown-item>Action 2</el-dropdown-item>
        </el-dropdown-menu>
</el-dropdown>
<template>
    <el-tabs  class="classtabs" v-model="activeName" @tab-click="handleClick">
    <el-tab-pane class="tabpane" id="post" label="Posts" name="first">
        <div>
        
        </div>
    </el-tab-pane>

    <el-tab-pane class="tabpane" id="mem" label="Members" name="second"></el-tab-pane>
    <el-tab-pane class="tabpane" id="prog" label="Progress" name="third"></el-tab-pane>
    </el-tabs>
</template>