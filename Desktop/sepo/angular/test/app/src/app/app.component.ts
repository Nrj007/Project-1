import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
})
export class AppComponent {
  sidebarWidth: string = '500px';

  toggleSidebar() {
    this.sidebarWidth = this.sidebarWidth === '500px' ? '0px' : '500px';
  }
}
