import { EventData } from "data/observable";
import { Page } from "ui/page";

export function navigatedTo(args: EventData) {
    var page = <Page>args.object;

    var context = page.navigationContext;

    page.bindingContext = context;
}