"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var main_view_model_1 = require("./main-view-model");
// Event handler for Page "navigatingTo" event attached in main-page.xml
function navigatingTo(args) {
    var page = args.object;
    page.bindingContext = new main_view_model_1.ViewModel();
}
exports.navigatingTo = navigatingTo;
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoibWFpbi1wYWdlLmpzIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsibWFpbi1wYWdlLnRzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiI7O0FBRUEscURBQThDO0FBRTlDLHdFQUF3RTtBQUN4RSxzQkFBNkIsSUFBZTtJQUV4QyxJQUFJLElBQUksR0FBUyxJQUFJLENBQUMsTUFBTSxDQUFDO0lBRTdCLElBQUksQ0FBQyxjQUFjLEdBQUcsSUFBSSwyQkFBUyxFQUFFLENBQUM7QUFDMUMsQ0FBQztBQUxELG9DQUtDIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IHsgRXZlbnREYXRhIH0gZnJvbSAnZGF0YS9vYnNlcnZhYmxlJztcbmltcG9ydCB7IFBhZ2UgfSBmcm9tICd1aS9wYWdlJztcbmltcG9ydCB7IFZpZXdNb2RlbCB9IGZyb20gJy4vbWFpbi12aWV3LW1vZGVsJztcblxuLy8gRXZlbnQgaGFuZGxlciBmb3IgUGFnZSBcIm5hdmlnYXRpbmdUb1wiIGV2ZW50IGF0dGFjaGVkIGluIG1haW4tcGFnZS54bWxcbmV4cG9ydCBmdW5jdGlvbiBuYXZpZ2F0aW5nVG8oYXJnczogRXZlbnREYXRhKSB7XG5cbiAgICBsZXQgcGFnZSA9IDxQYWdlPmFyZ3Mub2JqZWN0O1xuICAgIFxuICAgIHBhZ2UuYmluZGluZ0NvbnRleHQgPSBuZXcgVmlld01vZGVsKCk7XG59Il19