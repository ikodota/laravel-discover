<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component!
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="inputSiteStatus" class="control-label col-md-3 col-sm-3 col-xs-12"></label>
            <div class="col-md-9 col-sm-9 col-xs-12">

                <label><input type="checkbox"  id="inputSiteStatus" name="website_status" class="js-switch" checked   /></label>
                <span class="help-block">如果关闭，网站处于维护模式，仅限管理员访问。</span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.')
        }
    }
</script>