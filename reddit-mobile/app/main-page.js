"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var main_view_model_1 = require("./main-view-model");
var vm = new main_view_model_1.ViewModel();
// Event handler for Page "navigatingTo" event attached in main-page.xml
function navigatingTo(args) {
    var page = args.object;
    page.bindingContext = vm;
}
exports.navigatingTo = navigatingTo;
function showDetails(args) {
    var selectedItem = vm.posts.getItem(args.index);
}
exports.showDetails = showDetails;
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoibWFpbi1wYWdlLmpzIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsibWFpbi1wYWdlLnRzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiI7O0FBRUEscURBQThDO0FBRTlDLElBQUksRUFBRSxHQUFHLElBQUksMkJBQVMsRUFBRSxDQUFDO0FBRXpCLHdFQUF3RTtBQUN4RSxzQkFBNkIsSUFBZTtJQUV4QyxJQUFJLElBQUksR0FBUyxJQUFJLENBQUMsTUFBTSxDQUFDO0lBRTdCLElBQUksQ0FBQyxjQUFjLEdBQUcsRUFBRSxDQUFDO0FBQzdCLENBQUM7QUFMRCxvQ0FLQztBQUVELHFCQUE0QixJQUFJO0lBQzVCLElBQUksWUFBWSxHQUFHLEVBQUUsQ0FBQyxLQUFLLENBQUMsT0FBTyxDQUFDLElBQUksQ0FBQyxLQUFLLENBQUMsQ0FBQztBQUVwRCxDQUFDO0FBSEQsa0NBR0MiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgeyBFdmVudERhdGEgfSBmcm9tICdkYXRhL29ic2VydmFibGUnO1xuaW1wb3J0IHsgUGFnZSB9IGZyb20gJ3VpL3BhZ2UnO1xuaW1wb3J0IHsgVmlld01vZGVsIH0gZnJvbSAnLi9tYWluLXZpZXctbW9kZWwnO1xuXG52YXIgdm0gPSBuZXcgVmlld01vZGVsKCk7XG5cbi8vIEV2ZW50IGhhbmRsZXIgZm9yIFBhZ2UgXCJuYXZpZ2F0aW5nVG9cIiBldmVudCBhdHRhY2hlZCBpbiBtYWluLXBhZ2UueG1sXG5leHBvcnQgZnVuY3Rpb24gbmF2aWdhdGluZ1RvKGFyZ3M6IEV2ZW50RGF0YSkge1xuXG4gICAgbGV0IHBhZ2UgPSA8UGFnZT5hcmdzLm9iamVjdDtcbiAgICBcbiAgICBwYWdlLmJpbmRpbmdDb250ZXh0ID0gdm07XG59XG5cbmV4cG9ydCBmdW5jdGlvbiBzaG93RGV0YWlscyhhcmdzKSB7XG4gICAgdmFyIHNlbGVjdGVkSXRlbSA9IHZtLnBvc3RzLmdldEl0ZW0oYXJncy5pbmRleCk7XG4gICAgICAgXG59Il19