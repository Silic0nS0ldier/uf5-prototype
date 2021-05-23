import React from "react";
import { Story, Meta } from "@storybook/react";
import { MyComponent } from "../main";

export default {
    title: "MyComponent",
    component: MyComponent,
} as Meta;

export const FirstMidLast: Story = () => <MyComponent first="John" middle="Long Name" last="Smith" />;

export const FirstLast: Story = () => <MyComponent first="Jane" last="Doe" />;
